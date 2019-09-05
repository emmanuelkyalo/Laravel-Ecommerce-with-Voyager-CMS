<?php

use Illuminate\Support\Facades\Route;
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



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});




Route::get('/','ShopController@home');
Route::resource('/shop', 'ShopController');
Route::resource('/cart', 'CartController');
Route::get('/checkout','ShopController@checkout');

Route::post('/addtocart','CartController@store');

