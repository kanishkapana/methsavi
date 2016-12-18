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
		return View::make('home/index');
	}


	public function projects()
	{
		return View::make('projects/index');
	}


	public function doners()
	{
		return View::make('doners/index');
	}


	public function about()
	{
		return View::make('about/index');
	}

	/*
	 * About functon
	 */
	public function contact() {

		return View::make('contact/index');
	}

}
