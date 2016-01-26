<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('posts/{id}', [
    'uses' => 'PostsController@show',
    'as' => 'post_show_path'
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('auth',[
        'uses' => 'AuthController@index',
        'as' => 'auth_show_path'
    ]);
    Route::post('auth', [
        'uses' => 'AuthController@store',
        'as' => 'auth_store_path'
    ]);
});
