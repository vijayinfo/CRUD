@extends('layout')

<div class="load">

	

</div>
@section('content')
<div id="content">


@if(!$users)

<p>No users were found</p>

@endif

	@foreach($users as $user)
	        
	        <p>{{ $user->name }} with {{$user->email}} was created at {{date_format($user->created_at, 'd-m-Y H:i:s')}}</p>
	      
	@endforeach
	
	{{HTML::image('images/parchet.jpg', 'DRC Sports Race Management', array('id' => 'pa'));}}

	



	

	</div>

@stop