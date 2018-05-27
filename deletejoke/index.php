<?php

require_once "../connect/index.html.php";

if (isset($_GET['deletejoke'])) {
	try {

		$sql = 'DELETE FROM joke WHERE id = :id';
		$s = $pdo->prepare($sql);
		$s->bindValue(':id', $_POST['id']);
		$s->execute();

	} catch (PDOException $e) {
		$output = 'Ошибка при удалении шутки: ' . $e->getMessage();
		include 'output.html.php';
		exit();
	}

	header('Location: .');
	exit();
}
