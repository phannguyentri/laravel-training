<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|zzzz
*/

Route::get('/', function () {
    return view('welcome');
});
route::group(['prefix' => 'admin'],function(){
	route::group(['prefix' => 'cate'],function(){
		route::get('add',['as' => 'admin.cate.getAdd','uses' => 'CateController@getAdd']);
		route::post('add',['as' => 'admin.cate.postAdd','uses' => 'CateController@postAdd']);
	});
});