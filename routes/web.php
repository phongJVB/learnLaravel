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

// Router gọi đến trang chủ của website
Route::get('/home','PageController@getIndex')->name('home');

// Router gọi đến trang product của website
Route::get('/product','PageController@getProduct')->name('product');

// Router gọi đến trang shop của website
Route::get('/shop','PageController@getShop')->name('shop');

// Router gọi đến trang blog của website
Route::get('/blog','PageController@getBlog')->name('blog');

//Gọi đến MainController function index để trả về view dangnhap.php
Route::get('/main','MainController@index')->name('main');

//Gọi đến MainController function checkLogin để validate data
Route::post('/main/checklogin','MainController@checkLogin');

//Gọi đến MainController function successLogin 
Route::get('/main/successlogin','MainController@successLogin');

//Gọi đến MainController function logout
Route::get('/main/logout','MainController@logout');
