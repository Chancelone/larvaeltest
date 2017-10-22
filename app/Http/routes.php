<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//get请求
/*Route::get('basic1', function () {
    return 'hello world';
});

//post请求
Route::post('basic2', function () {
    return 'hello world2';
});

//多请求路由
Route::match(['get','post'],'multy1',function(){
    return 'multy1';
});

Route::any('multy2',function(){
    return 'multy2';
});

//带参数请求
Route::get('user/{name?}', function ($name='123') {
    return 'user-'.$name ;
})->where('name','[A-Za-z]+');

//路由别名
Route::get('user/center',['as' => 'center', function () {
    return route('center');
}]);

//路由视图
Route::get('view', function () {
    return view('welcome');
});*/

Route::any('user/info', ['uses' => 'UserController@info']);
Route::any('user/query', ['uses' => 'UserController@query']);
Route::any('user/orm', ['uses' => 'UserController@orm']);

Route::any('user/request', ['uses' => 'UserController@request']);






















