<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	include_once"persona.php";
	include_once"empleado.php";
	$nombre = $_POST['nombre'];
	$apellido =  $_POST['apellido'];
	$dni = (int)$_POST['dni'];
	$legajo = (int)$_POST['legajo'];
	$sueldo = (float)$_POST['sueldo'];

	if ($_POST['nombre'] == "" || $_POST['apellido'] == "" || $_POST['dni'] == "" || $_POST['legajo'] == "" || $_POST['sueldo'] == "") {
		echo "Error. Han quedado datos sin completar<br>";
		echo "<a href='index.html'>Volver</a>";
	} else{
		$empleado = new Empleado($nombre, $apellido, $dni, $_POST['sexo'], $legajo, $sueldo);
		echo $empleado;
	}
	 /*elseif( is_int($dni) || is_int($legajo) || is_float($sueldo)){
		echo "No ingreso valores numericos en los campos numericos<br>";
		echo "<a href='index.html'>Volver</a>";
	} else{
		echo "TODO Ok.";
	}*/
	?>

</body>
</html>



