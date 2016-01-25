<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;
use App\Models\Biodata;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Project;
use App\Http\Requests;
use App\Http\Requests\DeveloperRequest;
use App\Http\Controllers\Controller;

class DevelopersController extends Controller
{
   public function lists(){
   		$developers = Developer::all();
   		return view('developers.list',compact('developers')); 
   }

   public function detail($id){
   	$developer = Developer::findOrFail($id);
   	$biodata = $developer->biodata;
   	$education = $developer->education;
	   $skill = $developer->skill;
	   $experiences = $developer->experiences;
	   $projects = $developer->projects;
	   //dd([$skill,$biodata,$experiences,$projects]);

	   return view('developers.detail',compact('developer', 'biodata', 'skill','experiences','projects','education'));
   }

	public function index(){
		return view('developers.create');
	}

	public function store(DeveloperRequest $request){
		$developer = Developer::create($request->all());
		return redirect(route('developerList'));
	}
}