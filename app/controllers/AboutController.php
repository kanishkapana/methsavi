<?php

class AboutController extends BaseController {

    public function index()
    {
        return View::make('about/index' ,array('page' => 4));
    }

}