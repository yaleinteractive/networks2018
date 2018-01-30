<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	Hello

	<?php 

	$letter =  $_GET['letter'];
	$number =  $_GET['number'];
	$counter = 1;

	while ($counter <= $number) {
		echo "$letter$letter$letter$letter$letter ";
		$counter ++;
		system(escapeshellcmd("say $letter"));
		flush();
	}

	?>

	Goodbye.
	
</body>
</html>