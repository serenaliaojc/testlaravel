<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About</title>
</head>
<body>
	<h1>This is the about page.</h1>
	<?php 
		// var_dump($result); 
		foreach ($data as $key => $value) {
			echo "<li>".$key." : ".$value."</li>";
		}

		echo $country;
	?>
	@foreach($data as $key => $value)
		<li>{{ $key }} : {{ $value }}</li>
	@endforeach
</body>
</html>