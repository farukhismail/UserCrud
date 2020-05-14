@extends('layout')
@section('title')
    Edit user
@endsection
@section('mainContent')
<form class="form-horizontal" method="post" action="/users/{{$user->id}}">
    @method('PATCH')
    @csrf
    <fieldset>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Name</label>
            <div class="col-md-4">
                <input id="username" name="name" type="text" placeholder="Enter  Name" value="{{$user->name}}" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="username">User Name</label>
            <div class="col-md-4">
                <input id="username" name="username" type="text" placeholder="Enter User Name" value="{{$user->username}}" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-4">
                <input id="email" name="email" type="email"  placeholder="Enter email" value="{{$user->email}}" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Password</label>
            <div class="col-md-4">
                <input id="password" name="password" type="password" placeholder="Enter password" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="dob">Date Of Birth</label>
            <div class="col-md-4">
                <input id="dob" name="dob" type="date" placeholder="Enter dob" value="{{$user->dob}}"  class="form-control input-md">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary">Save</button>
            </div>
        </div>

    </fieldset>
</form>
@endsection