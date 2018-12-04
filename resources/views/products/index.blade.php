@extends('layouts.master')

@section('title')
    Products
@endsection

@section('content')
<h1>Products</h1>
    @foreach($products->chunk(3) as $productChunk)
     <div class="row">
        @foreach($productChunk as $product)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c05962448.png" style="max-width: 200px" alt="...">
                        <div class="caption">
                            <h3>{{ $product->name }}</h3>
                                <p class="description"> 
                                    {{ $product->description }}
                                </p>

                                <div class="clearfix">
                                    <div class="pull-left price">€{{ $product->price }}</div>
                                    <a href="{{ route('products.addToCart', ['id' => $product->id]) }}" class="btn btn-success">Add to Cart</a>
                                </div>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    @endforeach       
@endsection
