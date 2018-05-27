<?php

require_once "../connect/index.html.php";
require_once "../deletejoke/index.php";

try {

	$sql = 'SELECT id, joketext FROM joke';
	$result = $pdo->query($sql);

} catch (PDOException $e) {
	$output = 'Ошибка при извлечении шуток: ' . $e->getMessage();
	include 'error.html.php';
	exit();
}

foreach ($result as $row) {
	$jokes[] = ['id' => $row['id'], 'joketext' => $row['joketext']];
}

include 'jokes.html.php';