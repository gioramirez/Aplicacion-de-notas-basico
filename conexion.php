<?php 

class Conexion{

private $host = "localhost";
private $usuario = "root";
private $contraseña = "";
private $bd = "libreta";
public $conexion;


public function __construct(){
	$this->conexion = new mysqli($this->host, $this->usuario, $this->contraseña, $this->bd);

}


public function mostrarNotas(){
	$consulta = $this->conexion->prepare("SELECT * from Notas");
	$consulta->execute();
	return $consulta->get_result();
}

public function insertarNotas($title,$content){
	date_default_timezone_set('America/El_Salvador');

	$titulo = $title;
	$contenido = $content;
	$fecha = date("d-m-Y");
	$hora = date("H:i");

	$consulta = $this->conexion->prepare("INSERT INTO notas (titulo, contenido, fecha , hora) VALUES (?, ?, ? ,?)");
	$consulta -> bind_param("ssss", $titulo, $contenido,$fecha,$hora);	
	echo $consulta->execute();

}


public function modificarNotas($ID,$title,$content){
	date_default_timezone_set('America/El_Salvador');

	$id = $ID;
	$titulo = $title;
	$contenido = $content;
	$fecha = date("d-m-Y");
	$hora = date("H:i");

	$consulta = $this->conexion->prepare("UPDATE notas set titulo = ? , contenido = ?, fecha = ? , hora = ? where id = ?");
	$consulta->bind_param("ssssi", $titulo,$contenido,$fecha,$hora,$id);	
	echo $consulta-> execute();

}




public function eliminarNotas($ID){
	$consulta = $this->conexion->prepare("DELETE FROM notas where id = ?");
	$consulta -> bind_param("i", $id);
	$id = $ID;
	echo $consulta->execute();


}

public function mostrar(){
	$consulta = $this->conexion->prepare("SELECT * from Notas where id = ?");
	$consulta -> bind_param("i", $id);
	$id = $_POST["id"];
	$consulta->execute();
	$resultado = $consulta->get_result()->fetch_assoc();

	echo json_encode($resultado);
}


function escapar($html) {
  return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}







}






?>