<?php

class ProjectsController extends BaseController {

    public function index()
    {
        return View::make('projects/index', array('page' => 2));
    }

    public function project($projectTypeId, $projectId)
    {
        return View::make('projects/project', array('projectTypeId'=> $projectTypeId, 'projectId' => $projectId, 'page' => 2));
    }

}