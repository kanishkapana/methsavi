<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function home()
	{
		return View::make('home/index', array('page' => 1));
	}


	public function projects()
	{
		return View::make('projects/index', array('page' => 2));
	}


	public function doners()
	{
		return View::make('doners/index', array('page' => 3));
	}


	public function about()
	{
		return View::make('about/index' ,array('page' => 4));
	}

	/*
	 * About functon
	 */
	public function contact() {

		return View::make('contact/index' ,array('page' => 5));
	}

}
