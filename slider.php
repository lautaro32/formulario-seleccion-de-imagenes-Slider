<?php
        include("redimensionar.php");
        move_uploaded_file($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto1']['tmp_name'],$_FILES['foto1']['name']);
        move_uploaded_file($_FILES['foto2']['tmp_name'],$_FILES['foto2']['name']);
        $nombre=redimensionar($_FILES['foto']['name'], 800, 350);
        $nombre1=redimensionar($_FILES['foto1']['name'], 800, 350);
        $nombre2=redimensionar($_FILES['foto2']['name'], 800, 350);
?>




<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title> Slider con puro CSS </title>
  <link rel="stylesheet" href="estilos.css">

</head>


<body bgcolor=#1A2A36>
  <div class="contenedor">

    <input type="radio" id="1" name="imagen" hidden/>
    <input type="radio" id="2" name="imagen" hidden/>
    <input type="radio" id="3" name="imagen" hidden/>

    <div class="slide">
             
            

      <div class="items">

      <img src="<?php echo 'imagenes/'.$nombre; ?>">
        
      </div>

      <div class="items">

       <img src="<?php echo 'imagenes/'.$nombre1; ?>">
        
      </div>

      <div class="items">

        <img src="<?php echo 'imagenes/'.$nombre2; ?>">
        
      </div>
    </div>

    <div class="paginación">

      <label class="paginación-item" for="1">
        <img src="<?php echo 'imagenes/'.$nombre; ?>">
        
      </label>

      <label class="paginación-item" for="2">
       <img src="<?php echo 'imagenes/'.$nombre1; ?>">
        
      </label>

      <label class="paginación-item" for="3">
        <img src="<?php echo 'imagenes/'.$nombre2; ?>">
        
      </label>
    </div> 
  </div>
<footer>
  Grupo n°7 Krystin Guillen, Ignacio Caceres, Reta Matias y Rigo Lautaro
</footer>

</body> 
</html>


