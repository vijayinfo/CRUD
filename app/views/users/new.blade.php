@extends('layout')

@section('content')


	<h1>Register a user</h1>


	{{ Form::open(array('url' => 'create','method'=>'post')) }}


	{{ Form::token() }}

	<p>{{ Form::label('email','Email') }}</p>

	<p>{{ Form::text('email','Email',Input::old('email')) }}</p>

	<p>{{ Form::label('password','Password') }}</p>


	<p>{{ Form::password('password') }}</p>

	<p>{{ Form::label('password_confirm','Password Confirm') }}</p>

	<p>{{Form::password('password_confirm')}}</p>

	<p>{{Form::submit('Create user')}}</p>


	{{ Form::close() }}

@stop