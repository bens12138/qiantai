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
Route::get('/admin','AdminController@index');

Route::resource('user','UserController');
Route::resource('article','ArticleController');
Route::resource('goods','GoodsController');

Route::get('/index','HomeController@index');
Route::get('/liebiao','HomeController@liebiao');
Route::get('/xiangqing','HomeController@xiangqing');
Route::get('/login','HomeController@login');

//前端注册
Route::get('/register','HomeController@register');
Route::post('/register','HomeController@signup');
Route::get('/message','CommonController@message');

