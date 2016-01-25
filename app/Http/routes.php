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

Route::get('/', ['uses'=>'DevelopersController@lists','as'=>'developerList'] );

Route::get('create', 'DevelopersController@index' );

Route::post('create', ['uses'=>'DevelopersController@store','as'=>'developerCreate'] );

Route::get('detail/{id}', ['uses'=>'DevelopersController@detail','as'=>'developerDetail']);