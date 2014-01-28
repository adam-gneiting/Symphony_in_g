
<!DOCTYPE html>
<head>
	<title>Generated Divs</title>
</head>

<body>

<p> Let's Run a Test! </p>
<?php
for ($i = 1; $i < 11; ++$i) {
	print sprintf('<div id="div%1$d"> Div %1$d </div>', $i) . PHP_EOL;
}
?>

</body>
</html>