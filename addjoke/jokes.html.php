<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Список шуток</title>
	</head>
	<body>
		<p><a href="?addjoke">Добавьте собственную шутку</a></p>
		<p>Вот все шутки, которые есть в базе данных:</p>
		<?php foreach ($jokes as $joke): ?>
			<blockquote>
				<p>
					<?php echo htmlspecialchars($joke, ENT_QUOTES, 'UTF-8'); ?>
				</p>
			</blockquote>
		<?php endforeach;?>
	</body>
</html