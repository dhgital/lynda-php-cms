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
	
	$var1 = 3;
	$var2 = 4;
	
	?>
	
	
	<?php echo $float = 3.14; ?><br /><br />
	<?php echo $float = 7; ?><br /><br />
	<?php echo 4/3; ?><br /><br />
	
	Round: <?php echo round($float, 1); ?><br /><br />
	Ceiling: <?php echo ceil($float); ?><br /><br />
	Floor: <?php echo floor($float); ?><br /><br />
	
	<?php $integer = 3; ?>
	<?php $float = 3.14; ?>
	
	<?php echo "Is {$integer} integer? " . is_int($integer); ?><br />
	<?php echo "Is {$float} integer? " . is_int($float); ?><br /><br />
	
	<?php echo "Is {$integer} float? " . is_float($integer); ?><br />
	<?php echo "Is {$float}} float? " . is_float($float); ?><br /><br />
	
	<?php echo "Is {$integer} numeric? " . is_numeric($integer); ?><br />
	<?php echo "Is {$float} numeric? " . is_numeric($float); ?><br /><br />
	
</body>
</html>
