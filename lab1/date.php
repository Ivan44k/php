<?php
    
	/*
	ЗАДАНИЕ 1
	- Присвойте переменной $now значение метки времени актуальной даты(сегодня)
	- Присвойте переменной $birthday значение метки времени Вашего дня рождения
	- Создайте переменную $hour
	- С помощью функции getdate() присвойте переменной $hour текущий час
	*/
    $now = time();
    # echo date('Y-m-d H:i:s', $now);
    $birthday = mktime(0,0,0, 12, 2, 2003);
    $hour = getdate()['hours'];
    
    echo $now;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Использование функций даты и времени</title>
</head>
<body>
	<h1>Использование функций даты и времени</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	- Используя управляющую конструкцию if – elseif - else присвойте 
	  переменной $welcome значение, изходя из следующих условий
	  если число в переменной $hour попадает в диапазон:
	  * от 0 до 6 - 'Доброй ночи'
	  * от 6 (включительно) до 12 - 'Доброе утро'
	  * от 12 (включительно) до 18 - 'Добрый день'
	  * от 18 (включительно) до 23 - 'Добрый вечер'
	  * Если число в переменной $hour не попадает ни в один из вышеперечисленных
	    диапазонов, то присвойте переменной $welcome значение 'Доброй ночи'
	- Выведите $welcome на отдельной строке
	- Установите локаль ru_RU.UTF-8
	- С помощью функции datefmt_format() на отдельной строке выведите 
	  текущую дату, месяц, год, день недели и время,
	  например, "Сегодня 1 сентября 2018 года, суббота 09:30:00" 
	- На отдельной строке выведите фразу "До моего дня рождения осталось "
	- Выведите количество дней, часов, минут и секунд оставшееся до Вашего дня рождения
	*/

    if ($hour >=0 && $hour < 6) {
        $welcom = 'Доброй ночи';
    } elseif ($hour >= 6 && $hour <12) {
        $welcom = 'Доброе утро';
    } elseif ($hour >=12 && $hour <18) {
        $welcom = 'Добрый день';
    } elseif ($hour >=18  && $hour <23) {
        $welcom = 'Добрый вечер';
    } else {
        $welcom = 'Доброй ночи';
    }
    

    setlocale(LC_TIME, 'ru_RU.UTF-8');

     $fmt = datefmt_create(
        'ru_RU',
        IntlDateFormatter::FULL,
        IntlDateFormatter::FULL,
        'Europe/Moscow',
        IntlDateFormatter::GREGORIAN,
        "Сегодня d MMMM Y года, EEEE H:mm:ss"
    );

    $formateDate = datefmt_format($fmt, $now);

    $timeBirthday = $birthday - $now;

    if ($timeBirthday < 0) {
		$birthday = mktime(0,0,0, 12, 2, (int) date('Y') + 1);
		$timeBirthday = $birthday - $now;
	}

	$days = floor($timeBirthday / (60*60*24));
	$hours = floor(($timeBirthday % (60*60*24)) / (60*60));
	$minutes = floor(($timeBirthday % (60*60)) / 60);
	$seconds = $timeBirthday % 60;



	?>
	<p><?= $welcom ?>
	<p><?= $formateDate ?>
	<p>До моего дня рождения: <?= "$days дней, $hours часов, $minutes минут, $seconds секунд"?>
</body>
</html>