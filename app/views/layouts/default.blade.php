
<html>
	<head>
		<title>Authors and Books</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	</head>

	<body>
		{{-- Sidebar from DEFAULT --}}
		@if(Session::has('message'))
			<p style="color:green;">{{ Session::get('message') }}</p>
		@endif
		<div>@yield('content')</div>
	

	</body>
</html>