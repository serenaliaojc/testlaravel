<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Edit</title>
</head>
<body>
	@if($errors->any())
		@foreach($errors->all() as $error)
			{{ $error }}
		@endforeach
	@endif
	<!-- security feature: token -->
	<form action="{{ url('products',$product->id) }}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div>
			name: <input type="text" name="name" value="{{ $product->name }}">
		</div>
		<input type="submit" value="Edit Product">
	</form>
</body>
</html>