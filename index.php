<?php include_once('global_configuration.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $name ?></title>
</head>
<body>
	<h1>Bienvenido <?= $user_name ?></h1>
	<p><?= $parrafo_1 ?></p>

	<?php
	if (isset($parrafo_2) ):
	?>
		<p><?= $parrafo_2 ?></p>
	<?php
	endif;
	?>
</body>
</html>