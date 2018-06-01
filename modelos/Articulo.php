<?php 
require "../config/conexion.php";

	class Articulo{
		//constructor
		public function __construct(){

		}

		//insertar registros
		public function insertar($idcategoria,$codigo,$nombre,$stock,$descripcion,$imagen){

			$sql="INSERT INTO articulo (idcategoria,codigo,nombre,stock,descripcion,imagen,condicion) VALUES ('$idcategoria','$codigo','$nombre','$stock','$descripcion','$imagen','1')";

			return ejecutarConsulta($sql);
		}

		public function editar($idarticulo,$idcategoria,$codigo,$nombre,$stock,$descripcion,$imagen){
			$sql="UPDATE articulo SET idcategoria='$idcategoria', codigo='$codigo' nombre='$nombre', stock='$stock' descripcion='$descripcion', imagen='$imagen' WHERE idarticulo='$idarticulo'";

			return ejecutarConsulta($sql);
		}
		//desactivar categorias
		public function desactivar($idarticulo){
			$sql="UPDATE articulo SET condicion='0' WHERE idarticulo='$idarticulo'";

			return ejecutarConsulta($sql);
		}

		//activar categorias
		public function activar($idarticulo){
			$sql="UPDATE articulo SET condicion='1' WHERE idarticulo='$idarticulo'";

			return ejecutarConsulta($sql);
		}

		//mostrar un registro a modificar.
		public function mostrar($idarticulo){
			$sql="SELECT * FROM articulo WHERE idarticulo='$idarticulo'";

			return ejecutarConsultaSimpleFila($sql);
		}

		public function listar(){
			$sql="SELECT a.idarticulo, a.idcategoria, c.nombre as categoria, a.codigo, a.nombre, a.stock, a.descripcion, a.imagen, a.condicion FROM articulo a INNER JOIN categoria c ON a.idcategoria=c.idcategoria";
			return ejecutarConsulta($sql);
		}
	}

 ?>