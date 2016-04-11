<?php 
	include_once "persona.php";
	include_once "empleado.php";

	class Fabrica{
		private $_empleados;
		private $_razonSocial;

		function __construct($razonSocial){
			$this->_razonSocial = $razonSocial;
			$this->_empleados = array();
		}

		public function AgregarEmpleado($persona){
			if (array_push($this->_empleados, $persona)) {
				$this->EliminarEmpleadosRepetidos();
				return true;
			} else{
				return false;
			}
		}

		public function CalcularSueldos(){
			$totalSueldos = 0;
			foreach ($this->_empleados as $emp) {
				$totalSueldos.=$emp->getSueldos();
			}
			return $totalSueldos;
		}

		public function EliminarEmpleado($persona){
			$key = array_search($persona, $this->_empleados);
			if ($key === false) {
				return false;
			} else {
				unset($this->_empleados[$key]);
				return true;
			}
		}

		private function EliminarEmpleadosRepetidos(){
			$this->_empleados = array_unique($this->_empleados);
		}

		public function __toString(){
			$retorno = "Razon Social: ".$this->_razonSocial."<br>";
			foreach ($this->_empleados as $emp) {
				$retorno .= $emp."<br>";
			}
			return $retorno;
		}

	}
?>