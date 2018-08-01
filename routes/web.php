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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mypage', 'UserController@index')->middleware('auth');
//ユーザー認証機能//


Route::get('/arms/post', 'ArmsController@index');
Route::post('/arms/post/commit', 'ArmsController@post');
