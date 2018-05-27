<?php

require_once "../connect/index.html.php";

try {

	$sql = "CREATE TABLE IF NOT EXISTS joke ("
		. " id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,"
		. " joketext TEXT,"
		. " jokedate DATE NOT NULL"
		. ") DEFAULT CHARACTER SET utf8 ENGINE=InnoDB";

	$pdo->exec($sql);

} catch (PDOException $e) {
	$output = 'Ошибка создания базы данных.' . $e->getMessage();
	include 'output.html.php';
	exit();
}

$output = 'Таблица joke была успешно создана.';
include 'output.html.php';