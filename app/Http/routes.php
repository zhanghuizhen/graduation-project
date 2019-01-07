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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'Home\index@index');

//Route::get('admin/index', 'Admin\index@index');

//前台路由组
Route::group(['namespace' => 'Home'], function(){
    // 控制器在 "App\Http\Controllers\Home" 命名空间下

    //前台index
    Route::get('/', [
        'as' => 'index', 'uses' => 'Index@index'
    ]);

});

//后台路由组
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
    // 控制器在 "App\Http\Controllers\Admin" 命名空间下

    //后台index
    Route::get('/', [
        'as' => 'index', 'uses' => 'Index@index'
    ]);

    Route::get('topic/index', [
        'as' => 'topic/index', 'uses' => 'Topic@index'
    ]);



});