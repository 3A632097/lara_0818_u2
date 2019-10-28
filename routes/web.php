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
//回傳home頁面
//Route::get('home',function(){
//    return view('home');
//});
Route::get('home',function(){
    return view('home.index');
});
Route::get('hello/{name?}',['as' => 'hello.index','uses'=>
    'HelloController@index']);
