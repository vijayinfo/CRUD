<html>
<head>
	<title>Laravel quick strat</title>
	{{HTML::style('css/main.css')}}
	{{HTML::script('http://codeorigin.jquery.com/jquery-1.10.2.min.js')}}
</head>
	

<body>
	
	@yield('content')	
{{HTML::script('js/main.js')}}
</body>


</html>