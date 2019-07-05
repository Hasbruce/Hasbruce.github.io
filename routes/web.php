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
Route::get('home/perInfo','home\IndexController@perInfo');                //个人信息
Route::get('home/writeBlog','home\IndexController@writeBlog');    //写博客
Route::get('home/share','home\IndexController@share');    //博客分享
Route::get('home/list','home\IndexController@list');    //博客日记
Route::get('home/fengmain','home\IndexController@fengmain');    //学无止境
Route::get('home/time','home\IndexController@time');    //学无止境
