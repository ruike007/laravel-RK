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

Route::get('/', 'PostsController@index');
Route::resource('discussions','PostsController');

Route::get('/user/register','UserController@register');
Route::post('/user/register','UserController@store');
/**
 * github 推送路由
 */
Route::post('deploy','DeploymentController@deploy');