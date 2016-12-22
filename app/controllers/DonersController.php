<?php

class DonersController extends BaseController {

    public function index()
    {
        return View::make('doners/index', array('page' => 3));
    }

}