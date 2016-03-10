<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<style>
		.loader {
			display: none;
			position: fixed;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			background: rgba(0, 0, 0, 0.8);
			color: white;
			font-size: 32px;
			text-align: center;
			padding-top: 300px;
		}
	</style>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>

	{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js') !!}
	{!! HTML::script('js/votes.js') !!}
</body>
</html>