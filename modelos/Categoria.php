<?php 
require "../config/conexion.php";

	class Categoria{
		//constructor
		public function __construct(){

		}

		//insertar registros
		public function insertar($nombre,$descripcion){

			$sql="INSERT INTO categoria (nombre,descripcion,condicion) VALUES ('$nombre','$descripcion','1')";

			return ejecutarConsulta($sql);
		}

		public function editar($idcategoria,$nombre,$descripcion){
			$sql="UPDATE categoria SET nombre='$nombre', descripcion='$descripcion' WHERE idcategoria='$idcategoria'";

			return ejecutarConsulta($sql);
		}
		//desactivar categorias
		public function desactivar($idcategoria){
			$sql="UPDATE categoria SET condicion='0' WHERE idcategoria='$idcategoria'";

			return ejecutarConsulta($sql);
		}

		//activar categorias
		public function activar($idcategoria){
			$sql="UPDATE categoria SET condicion='1' WHERE idcategoria='$idcategoria'";

			return ejecutarConsulta($sql);
		}

		//mostrar un registro a modificar.
		public function mostrar($idcategoria){
			$sql="SELECT * FROM categoria WHERE idcategoria='$idcategoria'";

			return ejecutarConsultaSimpleFila($sql);
		}

		public function listar(){
			$sql="SELECT * FROM categoria";
			return ejecutarConsulta($sql);
		}

		//implementa metodo para listar los reg y mostrar en el select
		public function select(){
			$sql="SELECT * FROM categoria where condicion=1";
			return ejecutarConsulta($sql);
		}
	}

 ?>