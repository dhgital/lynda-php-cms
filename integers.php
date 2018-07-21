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
	
	
	Basic Math: 		<?php echo abs(0 - 300); ?><br /><br />
	Absolute value: 	<?php echo pow(2,8); ?><br /><br />
	Exponential: 		<?php echo sqrt(100); ?><br /><br />
	Square root: 		<?php echo fmod(20,7); ?><br /><br />
	Module: 			<?php echo rand(); ?><br /><br />
	Random: 			<?php echo rand(); ?><br /><br />
	Random (min,max):	<?php echo rand(1,10); ?><br /><br />
	
	+= : <?php $var2 += 4; echo $var2; ?><br /><br />
	-= : <?php $var2 -= 4; echo $var2; ?><br /><br />
	*= : <?php $var2 *= 3; echo $var2; ?><br /><br />
	/= : <?php $var2 /= 4; echo $var2; ?><br /><br />
	
	Increment : <?php $var2++; echo $var2; ?><br /><br />
	Decrement : <?php $var2--; echo $var2; ?><br /><br />
	
</body>
</html>
