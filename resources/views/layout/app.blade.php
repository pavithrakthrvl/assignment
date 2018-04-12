<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Laravel Project</title>
		<link rel="stylesheet" type="text/css" href="/css/app.css">
		<link href="/css/bootstrap.min.css" rel="stylesheet"/>
	</head>
	<body>
		@include('inc.navbar')
		@if(Request::is('/'))
			@include('inc.showCase')
		@endif
		<div class="container">
		
			<div class="row">
				<div class="col-md-8">
					@include('inc.messages')
					@yield("content")
					@yield("about")
				</div>
				<div class="col-md-4">
					@yield("image")
					@include('inc.sidebar')
				</div>
			</div>
		</div>
		
		<footer id="footer" class="text-center">
			<p>Copyrights 2018 &copy; Project</p>
		</footer>

	</body>
</html>