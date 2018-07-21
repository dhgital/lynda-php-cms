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
	
	$first = "The quick brown fox";
	$second = " jumped over the lazy dog.";
	
	$third = $first;
	$third .= $second;
	echo $third;
	
	?>
	
	Lowercase: <?php echo strtolower($third); ?><br />
	Uppercase: <?php echo strtoupper($third); ?><br />
	Uppercase first: <?php echo ucfirst ($third); ?><br />
	Uppercase words: <?php echo ucwords ($third); ?><br /><br />
	
	Length: <?php echo strlen($third); ?><br />
	Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br />
	Find: <?php echo strstr($third, "brown"); ?><br />
	Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?><br /><br />
	
	Repeat: <?php echo str_repeat($third, 2); ?><br />
	Make substring: <?php echo substr($third, 5, 10); ?><br />
	Find position: <?php echo strpos($third, "brown"); ?><br />
	Find character: <?php echo strchr($third, "z"); ?><br /><br />
	
	
</body>
</html>
