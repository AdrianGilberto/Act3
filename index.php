<!DOCTYPE html>
<html>
<head>
	<title>EMPLEADO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Ingresa los Datos:</h1>
    	<input type="text" name="nombres" placeholder="Nombres">
    	<input type="text" name="apellidos" placeholder="Apellidos">
    	<input type="text" name="rfc" placeholder="RFC">
    	<input type="text" name="telefono" placeholder="Numero de Telefono">
	    <input type="submit" name="hotel">
    </form>
        <?php 
        include("hotel.php");
        ?>
</body>
</html>