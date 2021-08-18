<?php 

include("../conexion.php");

$conn = new Conexion();


$tit = $_POST["titulo"];
$cont = $_POST["contenido"];

$titulo = htmlspecialchars($tit, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
$contenido = htmlspecialchars($cont, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");

$resultado = $conn->insertarNotas($titulo,$contenido);


?>



