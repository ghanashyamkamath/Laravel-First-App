@extends('layouts.app')
@section('content')
        <h1>{{$title}}</h1>
        {{-- first check for the services using if --}}
        @if(count($services) > 0)
            <ul class="list-group">
                @foreach($services as $service)
                    <li class="list-group-item">{{$service}}</li>
                @endforeach
            </ul>
        @endif
@endsection