@extends('layouts.master')


@section('content')

	<h1 class="well">All the posts</h1>


	
		
	<p>{{link_to_route('posts.create', 'Add a new post',null,array('class'=>'btn btn-primary'))}}</p>



</br></br>


@if($posts->count())

	@foreach($posts as $post)

	<div id="posts">
	
		</br></br>

		<p> Author {{$post->author}} </p>

		<p> Title {{$post->title}} </p>

		<p>Body {{$post->body}} </p>

		<div id="left">

		<p>{{ link_to_route('posts.show','Show',array( $post->id ),array('class'=>'btn btn-info')) }}</p>

		<p >{{ link_to_route('posts.edit','Edit',array( $post->id ),  array('class'=>'btn btn-success'))}}</p>

		<p>{{Form::open(  array('method'=>'DELETE','route' =>  array('posts.destroy' ,$post->id )))}}

			{{Form::submit('Delete',array('class'=>'btn btn-danger'))}}

			{{Form::close()}}


		</p>

			</div>
			<!-- end left div -->




		</div>

		<!-- end posts div -->
	@endforeach

@else


	<p class="text-danger lead"><b>There are no posts</b></p>

@endif
@stop