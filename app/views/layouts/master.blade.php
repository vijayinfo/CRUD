<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"/>

	{{HTML::style('css/main.css')}}

	

</head>
<body>
<div class="container">
	@if(Session::has('message'))


		<div class="flash alert">

			<p>{{Session::get('message')}}</p>

		</div>	



	@endif

	@yield('content')

	
</div>

</body>
</html>
