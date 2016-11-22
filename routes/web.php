<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('customer.pages.homepage');
});
Route::get('/category',function (){
    return view('customer.pages.category');
});
Route::get('/login-signup',function (){
    return view('customer.pages.login-signup');
});
Route::get('/contact',function (){
    return view('customer.pages.contact');
});
Route::get('/cart',function (){
   return view('customer.pages.cart');
});