<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<style type="text/css">
		.active a, li {
			color: green;
			text-decoration: none;
			list-style-type: none;
		}
	</style>
</head>
<body>
	@include('partials.nav')
	@yield('content')
</body>
</html>