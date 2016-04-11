<?php
	include_once"persona.php";
	include_once"empleado.php"; 
	$archivo = fopen("empleados.txt", "r");
	while (!feof($archivo)) {
		$renglon = fgets($archivo);
		$empleadoRecuperado = explode("[", $renglon);
		if ($empleadoRecuperado[0] != "") {
			$listaDeEmpleados[] = $empleadoRecuperado;
		}
	}
	foreach ($listaDeEmpleados as $empleado) {
		$empleados[] = new Empleado($empleado[0], $empleado[1], (int)$empleado[2], $empleado[3], (int)$empleado[5], (float)$empleado[4]);
	}

	for ($i=0; $i < sizeof($empleados); $i++) { 
		echo $empleados[$i]."<br>";
	}
	fclose($archivo);
?>