<?php

require_once "../connect/index.html.php";
require_once "../deletejoke/index.php";

try {

	$sql = 'SELECT joke.id, joketext, name, email FROM joke INNER JOIN author ON ( authorid=author.id )';
	$result = $pdo->query($sql);

} catch (PDOException $e) {
	$output = 'Ошибка при извлечении шуток: ' . $e->getMessage();
	include 'error.html.php';
	exit();
}

foreach ($result as $row) {
	$jokes[] = [
		'id' => $row['id'],
		'joketext' => $row['joketext'],
		'name' => $row['name'],
		'email' => $row['email'],
	];
}

include 'jokes.html.php';