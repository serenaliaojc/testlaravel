<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Create</title>
</head>
<body>
	@if($errors->any())
		@foreach($errors->all() as $error)
			{{ $error }}
		@endforeach
	@endif
	<!-- security feature: token -->
	<form action="{{ url('products') }}" method="post">
		{{ csrf_field() }}
		<div>
			name: <input type="text" name="name">
		</div>
		<input type="submit" value="Add Product">
	</form>
</body>
</html>