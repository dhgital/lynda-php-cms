<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Variables</title>
</head>

<body>
	<p>Hello!</p>
	<?php echo "Hello"; ?><br>
	<?php echo "Hello . Hello"; ?><br>
	<?php echo 2+3; ?>
	<br>
	---
	<br>
	<?php 
	
	echo "Hello<br>";
	echo 'Hello<br>';
	
	$greeting = "Hello";
	$target = "World";
	$phrase = $greeting . " " . $target;
		
		echo $phrase;
	?>
	<br><br>
	<?php
	
	echo "$phrase Again<br/>";
	echo '$phrase Again<br/>';
	echo "${phrase} Again<br/>";
	
	
	$var1 = 10;
	echo $var1;
	echo "<br />";
	echo "<br />";
	$var1 = 100;
	echo $var1;
	echo "<br />";
	echo "<br />";
	$var2 = "Hello";
	echo $var2;
	
	?>
	
</body>
</html>
