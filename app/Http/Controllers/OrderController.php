<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Session;


class OrderController extends Controller
{
    public function index()
    {   
        return view('shop.order');
    }

    public function getCheckout()
    {   
		if (!Session::has('cart')) {
		  	return view('shop.shopping-cart');
		  } 
		$oldCart = Session::get('cart');
		$cart = new Cart($oldCart);
		$total = $cart->totalPrice;
		return view('shop.order', ['total' => $total]);

    }

    public function postCheckout(Request $request)
    {
    	if (!Session::has('cart')) {
    		return redirect()->route('shop.shopping-cart');
    	}
    	$oldCart = Session::get('cart');
		$cart = new Cart($oldCart);

		Session::forget('cart');
		return redirect()->route('product.index')->with('succes', 'Succesfully purchased products!');
    }

}
