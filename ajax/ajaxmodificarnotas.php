<?php 

include("../conexion.php");

$conn = new Conexion();


$id = $_POST["uid"];
$tit = $_POST["utitulo"];
$cont = $_POST["ucontenido"];

$titulo = htmlspecialchars($tit, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
$contenido = htmlspecialchars($cont, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");

$resultado = $conn->modificarNotas($id,$titulo,$contenido);



?>