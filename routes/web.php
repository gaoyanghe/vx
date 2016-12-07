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
    return view('home/myinfo');
//    return view('home/mymenu');
});
Route::any('/wechat', 'WechatController@serve');
Route::any('/deploy','DeployMentController@deploy');
