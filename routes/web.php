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

Route::resource('/','home\IndexController');                        //首页
Route::get('home/shop','home\IndexController@shop');                //商品
Route::get('home/shopdetail','home\IndexController@shopdetail');    //商品详情
