<?php

class ProjectsController extends BaseController {

    public function index()
    {
        return View::make('projects/index', array('page' => 2));
    }
}