<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Константы</title>
</head>
<body>
	<h1>Константы</h1>
	<?php
    echo '<table>';
	$constants = get_defined_constants();
    foreach ($constants as $name => $value)
    echo "<tr><td>{$name}</td><td>{$value}</td></tr>";
    echo '</table>';
	?>
</body>
</html>
