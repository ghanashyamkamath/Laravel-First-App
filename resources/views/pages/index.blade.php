@extends('layouts.app')

{{-- section will wrap this into the content  --}}
@section('content')
    
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the laravel application from the laravel from scratch </p>
        <p><a class="btn btn-primary btn-lg" href="/login">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection