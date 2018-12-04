<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/categories', 'CategoryController@index')->name('Categories');

//ShoppingCart
Route::get('/shopping-cart', 'ProductController@getCart')->name('products.shoppingCart');
Route::get('/addToCart/{id}', 'ProductController@getAddToCart')->name('products.addToCart');