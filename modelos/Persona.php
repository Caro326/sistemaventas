<?php 
require "../config/conexion.php";

	class Persona{
		//constructor
		public function __construct(){

		}

		//insertar registros
		public function insertar($tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email){

			$sql="INSERT INTO persona (tipo_persona,nombre,tipo_documento,num_documento,direccion,telefono,email) VALUES ('$tipo_persona','$nombre','$tipo_documento','$num_documento','$direccion','$telefono','$email')";

			return ejecutarConsulta($sql);
		}

		public function editar($idpersona,$tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email){
			$sql="UPDATE persona SET tipo_persona='$tipo_persona', nombre='$nombre', tipo_documento='$tipo_documento', num_documento='$num_documento', direccion='$direccion', telefono='$telefono', email='$email' WHERE idpersona='$idpersona'";

			return ejecutarConsulta($sql);
		}
		//eliminar personas
		public function eliminar($idpersona){
			$sql="DELETE persona  WHERE idpersona='$idpersona'";

			return ejecutarConsulta($sql);
		}

		//activar categorias
		// public function activar($idcategoria){
		// 	$sql="UPDATE categoria SET condicion='1' WHERE idcategoria='$idcategoria'";

		// 	return ejecutarConsulta($sql);
		// }

		//mostrar un registro a modificar.
		public function mostrar($idpersona){
			$sql="SELECT * FROM persona WHERE idpersona='$idpersona'";

			return ejecutarConsultaSimpleFila($sql);
		}

		//listar proveedores
		public function listarp(){
			$sql="SELECT * FROM persona WHERE tipo_persona='Proveedor'";
			return ejecutarConsulta($sql);
		}

		//listar clientes
		public function listarc(){
			$sql="SELECT * FROM persona WHERE tipo_persona='Cliente'";
			return ejecutarConsulta($sql);
		}

		// //implementa metodo para listar los reg y mostrar en el select
		// public function select(){
		// 	$sql="SELECT * FROM categoria where condicion=1";
		// 	return ejecutarConsulta($sql);
		// }
	}

 ?>