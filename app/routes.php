<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',array(
		'uses' => 'HomeController@index'
));


Route::get('projects',array(
		'uses' => 'ProjectsController@index'
));


Route::get('projects/project/{id}',array(
		'uses' => 'ProjectsController@project'
));


Route::get('doners',array(
		'uses' => 'DonersController@index'
));


Route::get('about',array(
		'uses' => 'AboutController@index'
));


Route::get('contact',array(
		'uses' => 'ContactController@index'
));