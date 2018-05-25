<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
</head>
<body>
	<header>
		<h2>This is my header</h2>
	</header>
	<nav>
		@section('navbar')
		@endsection
		<a href="">Home</a>
		<a href="">About</a>
		<a href="">Contact</a>
	</nav>
	<div>
		@yield('content');
	</div>
	<footer>
		This is my footer.
	</footer>
</body>
</html>