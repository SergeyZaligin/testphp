<?php

require_once "../connect/index.html.php";

try {

	$sql = 'SELECT joketext FROM joke';
	$result = $pdo->query($sql);

} catch (PDOException $e) {
	$output = 'Ошибка при извлечении шуток: ' . $e->getMessage();
	include 'error.html.php';
	exit();
}

foreach ($result as $row) {
	$jokes[] = $row['joketext'];
}

include 'jokes.html.php';

if (isset($_GET['addjoke'])) {
	include 'form.html.php';
	exit();
}

if (isset($_POST['joketext'])) {
	try {
		$sql = 'INSERT INTO joke SET
		joketext = :joketext,
		jokedate = CURDATE()';
		$s = $pdo->prepare($sql);
		$s->bindValue(':joketext', $_POST['joketext']);
		$s->execute();

	} catch (PDOException $e) {
		$output = 'Ошибка при добавлении шутки: ' . $e->getMessage();
		include 'error.html.php';
		exit();
	}
	header('Location: .');
	exit();
}