<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function index()
    {   
        $products = Product::all();
        return view('products.index',['products' => Product::paginate(10)]);
    }

    public function getAddToCart(Request $request, $id){

        $product = Product::find($id);
        $oldCart = Session::has('cart') ? session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        
        return redirect()->route('products.index');

    }

    public function getCart(){

        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
