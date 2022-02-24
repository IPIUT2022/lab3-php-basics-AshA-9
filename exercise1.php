<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<p><?php 
$color = array('white', 'green', 'red') ;
foreach ($color as $key => $value) {
		echo $value." ";
}
 ?>   
 </p>
 <ul>
 	<?php foreach ($color as $key => $value) {
 		?>
 		<li><?php
		echo $value." ";?>

		</li>
		<?php
 	} ?>
 </ul>

</body>
</html>
