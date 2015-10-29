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

Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);
// Route::post('login',['as' => 'login', 'uses' => 'AdminController@login']);
// Route::get('logout',['as' => 'logout', 'uses' => 'AdminController@logout']);
Route::get('registrasiadmin',['as' => 'registrasiadmin', 'uses' => 'AdminController@create']);
Route::post('registeradmin',['as' => 'registeradmin', 'uses' => 'AdminController@doRegister']);
Route::get('/registration/activate/{code}', ['as' => 'activate', 'uses' => 'SimpleauthController@activate']);