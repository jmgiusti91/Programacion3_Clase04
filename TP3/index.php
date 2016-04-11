<?php 
	include_once "persona.php";
	include_once "empleado.php";
	include_once "fabrica.php";

	$empleado1 = new Empleado("Juan", "Giusti", 36171197, 'M', 226016, 12500.35);
	echo $empleado1->Hablar("Español");
	echo "<br>";
	echo "<br>";
	echo $empleado1;
	echo "<br>";
	echo "Nombre: ".$empleado1->getNombre();
	echo "<br>";
	echo "Apellido: ".$empleado1->getApellido();
	echo "<br>";
	echo "Dni: ".$empleado1->getDni();
	echo "<br>";
	echo "Sexo: ".$empleado1->getSexo();
	echo "<br>";
	echo "Sueldo: ".$empleado1->getSueldo();
	echo "<br>";
	echo "Legajo: ".$empleado1->getLegajo();

	$empleado2 = new Empleado("Pablo", "Aranda", 35787961, 'M', 112233, 14987.90);

	$fabrica1 = new Fabrica("La mejor");

	$fabrica1->AgregarEmpleado($empleado1);
	$fabrica1->AgregarEmpleado($empleado2);
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo $fabrica1;

	echo "<br>";
	echo "<br>";
	echo "<br>";
	$fabrica1->EliminarEmpleado($empleado2);
	echo $fabrica1;

	echo "<br>";
	echo "<br>";
	echo "<br>";

	$empleado3 = new Empleado("Maxi", "Luque", 22334455, 'M', 232425, 11345.90);
	$fabrica1->AgregarEmpleado($empleado3);
	$fabrica1->AgregarEmpleado($empleado1);

	echo $fabrica1;
?>