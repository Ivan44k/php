<?php
declare(strict_types=1);

/**
 * Функция для вывода таблицы умножения
 * 
 * @param int $cols - количество столбцов таблицы,
 * @param int $rows - количество строк таблицы,
 * @param string $color - цвет заголовков (первого столбца и первой строки),
 */
function drawTable(int $cols = 10, int $rows = 10, string $color = 'yellow'): void
{
    static $count = 0;
    ++$count;

    //echo "<table>";
    echo "<tr>";
    echo '<th style="background-color:' . $color .';"></th>';

    for($c = 1; $c <= $cols; $c++) {
        echo '<th style="background-color:' . $color .';">', $c, '</th>';
    }
    echo "</tr>";

    for ($r = 1; $r <= $rows; $r++) {
        echo '<tr>';
        
        echo '<th style="background-color:' . $color .';">', $r, '</th>';
        for ($c = 1; $c <= $cols; $c++) {
            echo "<td>", $r * $c, "</td>";
        }
        echo "</tr>";
    }

    //echo "</table>";

    //return $count;
    }
    /**
 * Функция для создания списка (меню).
 * 
 * @param array $menu - массив,содержащий элементы меню (ассоциативные массивы с парами название - ссылка),
 * @param bool $vertical определяет, будет ли меню вертикальным (true) или горизонтальным (false)
 */
    function getMenu(array $menu, bool $vertical = true) {
        if ($vertical === true) {
            $menuClasses = 'menu';
        } else {
            $menuClasses = 'menu vertical';
        }

        echo "<ul class='$menuClasses'>";
        foreach ($menu as $value) {
            echo "<li><a href=\"{$value['href']}\">{$value['link']}</a></li>";
        }
        echo "</ul>";
    }
    /**
 * Устанавливает значение переданной переменной приветствия
 * 
 * @param string $welcome - переменная, хранящая строку приветствия, передаётся по ссылке.
 */
    function setWelcome()
{
    $hour = getdate()['hours'];

    if ($hour >= 0 && $hour < 6) {
        return'Доброй ночи';
    } elseif ($hour >= 6 && $hour < 12) {
        return 'Доброе утро';
    } elseif ($hour >= 12 && $hour < 18) {
        return 'Добрый день';
    } elseif ($hour >= 18 && $hour < 23) {
        return 'Добрый вечер';
    } else {
        return 'Доброй ночи';
    }
}