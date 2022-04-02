@extends('layouts/app')

@section("content")
<h1>contact</h1>
{{ Form::open(['url' => 'contact/submit']) }}
    <div class="form-group">
        {{Form::label('name', 'name')}}
        {{Form::text('name', 'Enter Name')}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', 'example@gmail.com')}}
    </div>
    <div class="form-group">
        {{Form::label('message', 'E-Mail Address')}}
        {{Form::textarea('message', 'Enter message')}}
    </div>
    <div>
        {{Form::submit('submit')}}
    </div>
{{ Form::close() }}
@endsection

@section('sidebar')
@endsection 