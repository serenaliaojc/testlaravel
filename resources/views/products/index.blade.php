<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
</head>
<body>
	<h1>Products Index</h1>
	@foreach($products as $p)
		<li><a href="{{ url('/products', $p->id) }}">{{ $p->name }}</a></li>
		<form action="{{ url('/products', $p->id) }}" method="post">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
			<input type="submit" value="Delete">
		</form>
	@endforeach

	<a href="{{ url('products/create') }}">Add Product</a>

</body>
</html>