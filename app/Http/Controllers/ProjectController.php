<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Response;
class ProjectController extends Controller
{
    //
    public function index()
    {
        $projects = Project::orderBy('id','desc')->get();
        return view('projects.index')->with(compact('projects'));
    }

    public function store(Request $request)
    {
        
        $project = Project::create($request);
        return Response($project);
    }
    
}
