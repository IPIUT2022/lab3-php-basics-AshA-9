<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	$array= array(1 ,2, 4, 5, 5);
	print_r($array);
	$int =rand(0, count($array)-1);
	echo "<br>";
	array_splice($array, $int, 0," $" );
	print_r($array);

	?>

</body>
</html>
