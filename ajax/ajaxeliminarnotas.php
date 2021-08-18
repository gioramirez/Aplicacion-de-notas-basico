<?php

include("../conexion.php");

$conn = new Conexion();

$id = $_POST["id"];

$resultado = $conn->eliminarNotas($id);

?>