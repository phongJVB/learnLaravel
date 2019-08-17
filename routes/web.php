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

//Gọi đến MainController function index để trả về view dangnhap.php
Route::get('/main','MainController@index')->name('main');

//Gọi đến MainController function checkLogin để validate data
Route::post('/main/checklogin','MainController@checkLogin');

//Gọi đến MainController function successLogin 
Route::get('/main/successlogin','MainController@successLogin');

//Gọi đến MainController function logout
Route::get('/main/logout','MainController@logout');