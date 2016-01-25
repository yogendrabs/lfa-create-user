@extends('layouts.master')

@section('content')

    <h1>Enter Details</h1>
    <hr>
    <form class="form-group" role="form" method="POST" action="{{ route('developerCreate') }}">
        <input type="hidden" value="{{ csrf_token() }}" name="_token" />
    <div class="form-group">
        <input type="text" name="name" placeholder="Enter Name" class="form-control">
    </div>
        <div class="form-group">
            <input type="text" name="email" placeholder="Enter Email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Enter Password" class="form-control">
        </div>
        <div class="form-group">
            <textarea name="biodata" placeholder="Enter Biodata" class="form-control" style="height:35px;"></textarea>
        </div>

            <label>Education</label>
        <div class="row">
            <div class="col-md-4">
            <input type="text" name="course" placeholder="Enter Course" class="form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="university" placeholder="Enter University" class="form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="duration" placeholder="Enter Duration : (2010-2014)" class="form-control">
            </div>
        </div>
        <label>Experience</label>
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="experienceTitle" placeholder="Title" class="form-control">
            </div>
            <div class="col-md-8">
                <textarea type="text" name="experienceDetail" placeholder="Detail" class="form-control" style="height:35px;"></textarea>
            </div>
            </div>
        <label>Projects</label>
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="projectTitle" placeholder="Title" class="form-control">
            </div>
            <div class="col-md-8">
                <textarea type="text" name="projectDetail" placeholder="Detail" class="form-control" style="height:35px;"></textarea>
            </div>
        </div>
        <label>Skills</label>
        <div class="row form-group">
            <div class="col-md-4">
                <input type="text" name="language" placeholder="Languages" class="form-control">
            </div>
            <div class="col-md-4">
                <input type="text" name="framework" placeholder="Frameworks" class="form-control">
            </div>
            <div class="col-md-4">
                <input type="text" name="library" placeholder="Libraries" class="form-control">
            </div>
            </div>

        <div class="row form-group">
            <div class="col-md-4">
                <input type="text" name="tool" placeholder="Tools" class="form-control">
            </div>
            <div class="col-md-4">
                <input type="text" name="storage" placeholder="Storage" class="form-control">
            </div>
            <div class="col-md-4">
                <input type="text" name="other" placeholder="Other" class="form-control">
            </div>

        </div>
        <div class="pull-right">
        <div class="">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
            </div>
        </div>
    </form>



    @stop