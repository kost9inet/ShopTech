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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/categories', 'CategoriesController@index')->name('categories.index');

Route::get('/offers', 'offersController@index')->name('offers.index');

Route::get('/contact', 'contactController@index')->name('contact.index');

Route::get('/product', 'productController@index')->name('product.index');

Route::get('/checkout', 'checkoutController@index')->name('checkout.index');

Route::get('/cart', 'cartController@index')->name('cart.index');

Route::get('/homes', 'homesController@index')->name('homes.index');
Auth::routes();



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
