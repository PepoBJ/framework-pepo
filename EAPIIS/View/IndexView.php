<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Hi!</title>
	<?=$helper->css('ed-grid')?>
</head>
<body>
	<h1>bienvenido al framework de PePo</h1>
	<a href="<?=$helper->url('index', 'hola')?>">Hola</a>
	<?=$helper->js('jquery')?>
</body>
</html>