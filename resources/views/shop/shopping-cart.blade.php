@extends('layouts.app')

@section('title')
    Shopping-cart
@endsection

@section('content')
	@if(Session::has('cart'))
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-3 col-sm-offset-3">
				<ul class="list-group">
					@foreach($products as $product)
						<li class="list-group-item">
							<span class="badge">{{ $product['qty'] }}</span>
							<strong>{{ $product['item']['name'] }}</strong>
							<span class="label label-succes">€ {{ $product['price'] }}</span>
							<button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li><a href="#">Reduce by 1</a></li>
									<li><a href="#">Reduce all</a></li>
								</ul>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="">
				<strong>Total:€ {{ $totalPrice }}</strong>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="">
				<a href="{{ route('getCheckout') }}" type="button" class="btn btn-success">Checkout</a>
			</div>
		</div>
	@else
		<div class="row">
			<div class="">
				<h2>No items in cart.</h2>
			</div>
		</div>
	@endif
@endsection



				
			