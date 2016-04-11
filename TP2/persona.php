<?php 
	abstract class Persona{

		private $_apellido;
		private $_dni;
		private $_nombre;
		private $_sexo;

		function __construct($nombre, $apellido, $dni, $sexo){
			$this->_nombre=$nombre;
			$this->_apellido=$apellido;
			$this->_dni=$dni;
			$this->_sexo=$sexo;
		}

		public function getNombre(){
			return $this->_nombre;
		}

		public function getApellido(){
			return $this->_apellido;
		}

		public function getDni(){
			return $this->_dni;
		}

		public function getSexo(){
			return $this->_sexo;
		}

		abstract protected function Hablar($idioma);

		public function toString(){
			$retorno = "Nombre: $this->_nombre - Apellido: $this->_apellido - Dni: $this->_dni - Sexo: $this->_sexo";
			return $retorno;
		}
	}
?>