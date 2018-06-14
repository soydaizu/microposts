@extends('layouts.app')

@section('content')
<h1>User List</h1><br>
    @include('users.users', ['users' => $users])
@endsection