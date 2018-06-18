<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php-lessons</title>
</head>
<body>
	<h1>PHP - 5. Post и Get запросы.</h1>
<a href="index.php">PHP - Главная страница</a><br><br>		
<a href="lesson-2.php">PHP - 2. Основы PHP. Массивы.</a><br>
<a href="lesson-3.php">PHP - 3. Основы PHP. Ассоциативные массивы.</a><br>
<a href="lesson-4.php">PHP - 4. Основы PHP. Функции.</a><br>

<h3>Форма отправки почтового сообщения:</h3><br>

<?php


if (!empty($_POST)) {
	$message = "Вам новое сообщение с сайта. \n" 
							. "Имя отправителя: " . $_POST['name'] . "\n"
							. "Email отправителя: " .  $_POST['email'] . "\n"
							. "Сообщение: \n" . $_POST['message'];

	$result = mail("stasposter@narod.ru", "Message from page of PHP lesson", $message);

	if ($result) {
			echo "Ваше сообщение отправлено успешно!";
	} else {
			echo "Какая-то ошибка. Письмо не отправлено.";
	}

}

?>

<form action="" method="post">
	<input type="text" name="name" placeholder="Укажите Ваше имя"><br><br>
	<input type="text" name="email" placeholder="Укажите Ваш email"><br><br>
	<textarea name="message" id="" cols="50" rows="8" placeholder="Напишите Ваше сообщение"></textarea><br>
	<input type="reset" value="Сбросить/Отмена">
	<input type="submit" value="Отправить сообщение">
</form>

</body>
</html>