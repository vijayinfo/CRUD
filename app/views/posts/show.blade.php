@extends('layouts.master')


@section('content')


	@if($post)	

	<h1 class="well">The single post</h1>

	<div id="posts">
	
		</br></br>

		<p class="single"> Author {{e($post->author)}} </p>

		<p class="single"> Title {{e($post->title)}} </p>

		<p class="single">Body {{e($post->body)}} </p>

		<div id="left">

		<p>{{ link_to_route('posts.index','Return to posts',null,array('class'=>'btn btn-info')) }}</p>

		<p >{{ link_to_route('posts.edit','Edit',array( $post->id ),  array('class'=>'btn btn-success'))}}</p>

		<p>{{Form::open(  array('method'=>'DELETE','route' =>  array('posts.destroy' ,$post->id )))}}

			{{Form::submit('Delete',array('class'=>'btn btn-danger'))}}

			{{Form::close()}}


		</p>

			</div>
			<!-- end left div -->

		</div>

		<!-- end posts div -->


	@else

	<p ><li class="errors">There is no post with that id</li></p>

	@endif

@stop