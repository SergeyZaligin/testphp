<?php

require_once "../connect/index.html.php";

try {

	$sql = 'UPDATE joke SET jokedate="2018-05-26"
			WHERE joketext LIKE "%chicken%"';
	$affectedRows = $pdo->exec($sql);

} catch (PDOException $e) {
	$output = 'Ошибка обновления базы данных.' . $e->getMessage();
	include 'output.html.php';
	exit();
}

$output = "Обновлено столбцов: $affectedRows";
include 'output.html.php';