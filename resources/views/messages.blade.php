@extends('layouts/app')

@section("content")
<h1>messages</h1> 
    @if(count($messages) > 0)
        @foreach ($messages as $message)
        <ul class="list-group">
            <li class="list-group-item">{{$message->name}} </li>
            <li class="list-group-item">{{$message->email}} </li>
            <li class="list-group-item">{{$message->message}} </li>
        </ul> <br>
        @endforeach
    @endif
@endsection

@section('sidebar')
    <p>appended to sidebar</p>
@endsection