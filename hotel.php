<?php 

include("con_db.php");

if (isset($_POST['hotel'])) {

    if (
	strlen($_POST['nombres']) >= 1 &&
	strlen($_POST['apellidos']) >= 1 && 
	strlen($_POST['rfc']) >= 1 && 
	strlen($_POST['telefono']) >= 1){
	    
		$nombres = trim($_POST['nombres']);
	    $apellidos= trim($_POST['apellidos']);
		$rfc = trim($_POST['rfc']);
		$telefono = trim($_POST['telefono']);

	    $consulta = "INSERT INTO empleado( nombres, apellidos, rfc, telefono) VALUES ('$nombres','$apellidos','$rfc','$telefono')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>