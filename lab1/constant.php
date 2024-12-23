<?php
/*
ЗАДАНИЕ 1
- Создайте константу и присвойте ей значение.
*/
define("CONSTANT", "Здравствуй, мир.");
?>
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
	/*
	ЗАДАНИЕ 2
	- Проверьте, существует ли константа, которую Вы хотите использовать.
	- Выведите значение созданной константы.
	ЗАДАНИЕ 3
	- Используя предопределённые в ядре константы выведите текущую версию PHP.
	- Используя магические константы выведите директорию скрипта.
	*/
	if (defined('CONSTANT')) {
	    echo 'Константа CONSTANT определена<br>';
	} else {
	    echo 'Константа CONSTANT не определена<br>';
	}
	echo CONSTANT . '<br>';
	

	echo 'Текущая версия PHP ', PHP_VERSION . '<br>';
	
	echo 'Текущая директория ', __DIR__;
	?>
</body>
</html>