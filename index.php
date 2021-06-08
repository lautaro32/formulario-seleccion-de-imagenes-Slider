<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="formestilos.css" rel="stylesheet" type="text/css">
    <title>Formulario de imagenes</title>
</head>
<body bgcolor=#1A2A36>

	<h1 class="titulo"> Formulario de imagenes</h1>

	<div class="form">
		<form method="POST" action="slider.php" enctype="multipart/form-data">
		<fieldset>

		<legend>Seleccionar 3 imagenes para colocar en el Slider</legend>
				<p>IMAGEN 1: </p>
					<input required type="file" name="foto" accept="image/x-png,image/gif,image/jpeg"></input><br>
				<p>IMAGEN 2: </p>
					<input required type="file" name="foto1" accept="image/x-png,image/gif,image/jpeg"></input><br>
				<p>IMAGEN 3: </p>
					<input required type="file" name="foto2" accept="image/x-png,image/gif,image/jpeg"></input><br><br>

					<input type="submit" value="SUBIR" name="enviar">
		

		</fieldset>
		</form>
	</div>
	<footer>
  Grupo N°6 Krystin Guillen, Ignacio Caceres, Reta Matias y Rigo Lautaro
</footer>

</body>
</html>
