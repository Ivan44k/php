<?php
	/*
	ЗАДАНИЕ 1
	- Создайте строковую переменную $login и присвойте ей значение ' User '
	- Создайте строковую переменную $password и присвойте ей значение 'megaP@ssw0rd'
	- Создайте строковую переменную $name и присвойте ей значение 'иван'
	- Создайте строковую переменную $email и присвойте ей значение 'ivan@petrov.ru'
	- Создайте строковую переменную $code и присвойте ей значение '<?=$login?>'
	*/
    $login = ' User ';
    $password = 'megaP@ssw0rd';
    $name = 'иван';
    $email = 'ivan@petrov.ru';
    $code = '<?=$login?>';
    /**
 * Проверка сложности пароля.
 * Пароль должен содержать минимум:
 * - одну заглавную букву,
 * - одну строчную букву,
 * - одну цифру,
 * - длина пароля не менее 8 символов.
 * 
 * @param string $password - пароль для проверки,
 * @return bool возвращает true, если пароль соответствует требованиям.
 */
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Использование функций обработки строк</title>
</head>
<body>

<?php
	/*
	ЗАДАНИЕ 2
	- Используя строковые функции, удалите пробельные символы в начале и конце переменной $login, а также сделайте все символы строчными (малыми)
	- Проверьте значение переменной $password на сложность: пароль должен содержать минимум одну заглавную латинскую букву, одну строчную и одну цифру, а длина должна быть не меньше 8 символов. Оформите полученный код в виде пользовательской функции.
	- Используя строковые функции, сделайте первый символ значения переменной $name прописной (большой)
	- Используя функцию фильтрации переменных проверьте корректность значения $email
	- Используя строковые функции выведите значение переменной $code в браузер в том же виде как она задана в коде
	*/
    $login = trim(strtolower($login));

    function chekPassword($password) {
        if (strlen($password) < 8) {
            return $password;
        }
        elseif (!preg_match('/[A-Z]/', $password)){
            return false;
        }
        elseif (!preg_match('/[a-z]/', $password)) {
            return false;
        }
        elseif (!preg_match('/[0-9]/', $password)) {
            return false;
        }
        
        return true;
    }

    $passValid = chekPassword($password) ? 'Пароль сложный' : 'Пароль простой';
    
    # $name = ucfirst($name);
    $name = mb_convert_case($name, MB_CASE_TITLE,'UTF-8');
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email '$email' является корректным.";
    } else {
        echo "Email '$email' является некорректным.";
    }

    htmlspecialchars($code);


?>
<p>Логин после проверки: <?= $login ?></p>
<p>Пароль после проверки: <?= $passValid ?></p>
<p>Имя после проверки: <?= $name ?></p>
<p>Email после проверки: <?= $email ?></p>
<p>Code после проверки: <?= htmlspecialchars($code)?></p>

</body>
</html>