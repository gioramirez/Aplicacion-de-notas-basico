
<?php 
require_once("../conexion.php");

$conn = new Conexion();


$salida = '';

$resultado = $conn->mostrarNotas();

if($resultado == true){

	foreach ($resultado as $fila) {

	$salida.='

		<div class="card shadow p-3 mb-4 bg-light rounded col-md-12">
					  <div><h3>'.$fila["titulo"].'
					  <button type="button" class="float-right mr-3 btn btn-danger btn-sm" onclick="alert_EliminarNota('.$fila["id"].')"><i class="fas fa-times"></i></button>

					  	<button type="button" class="float-right mr-3 btn btn-warning btn-sm" id="idmod" data-toggle="modal" data-target="#staticBackdrop" onclick="modificarNotas('.$fila["id"].')"><i class="fas fa-edit"></i></button>
					  	</h3>
					  	<h5>'.$fila["fecha"].'&nbsp;&nbsp;'.$fila["hora"].'</h5></div>
					  <div class="card-body">					    
					    <p class="card-text">'.$fila["contenido"].'</p>
					    
					    
					  </div>
		</div>

		';

	}

	echo $salida;

}else{
	echo "No hay Notas";
}




?>



