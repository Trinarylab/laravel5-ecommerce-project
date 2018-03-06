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
    return view('web.index');
});

Route::get('products', function () {
    return view('web.product-list');
});

Route::get('product-detail', function () {
    return view('web.product-detail');
});

Route::get('checkout',function (){
    return view('web.checkout');
});