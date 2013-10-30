@extends('layouts.master')



@section('content')

<h1 class="well">Create a Post</h1>

@if($errors->has())


{{$errors->first('author','<li class="errors">:message</li>')}}

{{$errors->first('title','<li class="errors">:message</li>')}}

{{$errors->first('body','<li class="errors">:message</li>')}}

@endif

{{Form::open(  array('route' =>'posts.store','class'=>'form-create' ))}}

	
	{{ Form::token() }}

	<p>{{ Form::label('author','Author') }}</p>

	<p>{{ Form::text('author',Input::old('author'),array('placeholder'=>'Author')) }}</p>


	<p>{{ Form::label('title','Title') }}</p>

	<p>{{ Form::text('title',Input::old('title'),array('placeholder'=>'Title')) }}</p>

	
	<p>{{ Form::label('body','Body') }}</p>

	<p>{{ Form::textarea('body',Input::old('body'),array('placeholder'=>'Body','class'=>'form-control')) }}</p>


	<p>{{Form::submit('Create a post',array('class'=>'btn-info'))}}</p>



	



{{Form::close()}}






@stop