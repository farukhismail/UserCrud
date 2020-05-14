@extends('layout')
@section('title')
    All users
@endsection
@section('mainContent')
<div class="container">
    <h2>All Users</h2>
    <a href="{{route('users.create')}}" class="btn btn-primary btn-mini">Add New User</a>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>User Name</th>
            <th>Email</th>
            <th>DOB</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($users))
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->dob}}</td>
                    <td>
                      <a href="/users/{{$user->id}}/edit" class="btn btn-primary btn-mini">Edit</a>
                        <form action="/users/{{$user->id}}" method="post">
                            @method('delete')
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif


        </tbody>
    </table>
</div>
@endsection