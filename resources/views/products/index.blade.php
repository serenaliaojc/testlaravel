@extends('layout.admin')

@section('title')
	Product List
@endsection

@section('navbar')
	<a href="">Products</a>
@endsection

@section('content')

<h1>Products Index</h1>
@foreach($products as $p)
	<li>
		<a href="{{ url('/products', $p->id) }}">{{ $p->name }}</a>
		<a href='{{ url("/products/{$p->id}/edit") }}'>Update</a>
	</li>
	<form action="{{ url('/products', $p->id) }}" method="post">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<input type="submit" value="Delete">
	</form>
@endforeach

<a href="{{ url('products/create') }}">Add Product</a>

@endsection