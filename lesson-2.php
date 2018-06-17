<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php-lessons</title>
</head>
<body>
	<h1>PHP - 2. Основы PHP. Массивы.</h1>
<a href="index.php">PHP - Главная страница</a><br><br>	
<a href="lesson-3.php">PHP - 3. Основы PHP. Ассоциативные массивы.</a><br>
<a href="lesson-4.php">PHP - 4. Основы PHP. Функции.</a><br>
<a href="lesson-5.php">PHP - 5. Post и Get запросы.</a>

<?php 


$strings = array(
"The Elder Scrolls 4",
"Half Life 2",
"FlatOut 2",
"Unreal Tournament 3",
"Warp",
"Shank",
"Bad Day LA",
"The Walking Dead: Season Two",
"GRID Autosport",
"Valiant Hearts",
"Star Conflict",
"Path of Exile",
"The Sims 2",
"DOOM 3",
"Война и мир"
);

$number = count($strings);

print "<p>Лёгкие игры для ПК:</p><br>";

echo "<ol>";
for ($i=0; $i < $number; $i=$i+1) {
		echo "<li> $strings[$i] </li>";
}
echo "</ol>";

?>

</body>
</html>