<?php 
require "../config/conexion.php";

	class Permiso{
		//constructor
		public function __construct(){

		}
		public function listar(){
			$sql="SELECT * FROM permiso";
			return ejecutarConsulta($sql);
		}
	}

 ?>