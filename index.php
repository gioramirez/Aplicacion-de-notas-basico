
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="bootstrap-4.5.3/css/bootstrap.min.css"/>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Notas</title>
</head>

<style type="text/css">
	body{
		font-family: 'Poppins', sans-serif;
	}

	.navbar{
		min-height: 90px;
	}
	

</style>


<body class="bg-dark">	
	<nav class="navbar navbar-expand-lg navbar-light bg-dark fondo">
  <h5 class="font-weight-bold text-white">Aplicación de notas</h5>  
  </nav>

  

<div class="container mt-5">				
	<form method="post" id="frm_notas">

		<div class="col-md-6 mx-auto">

			<h2 align="center" class="text-white">Agregar Nota</h2>
			<label class="text-white">Título</label>
			<input type="text" name="titulo" class="form-control" placeholder="Ingrese el título" required>
			<br>
			<label class="text-white">Contenido</label>
			<textarea name="contenido" class="form-control input-sm" required>

			</textarea>
			<br>

		
			<button type="button" name="enviar" value="Guardar" id="btnguardar" class="btn btn-info">Guardar</button>	


			</form>

		</div>


</div>


<div class="container">

	<h2 align="center" class="text-white">Mis notas</h2>

	<div id="result">
		
	</div>

</div>


<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modificar Nota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">      	
      	     	

      <form method="post" id="frm_editar">

      		<input type="hidden" name="uid" id="id">
      		<label>Título</label>
			<input type="text" name="utitulo" class="form-control" id="titulo" required>
			<br>
			<label>Contenido</label>
			<textarea name="ucontenido" id="contenido" class="form-control input-sm" required>

			</textarea>
			<br> 			

      </form>   

       	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnmodificar" data-dismiss="modal">Modificar</button>
      </div>
    </div>
  </div>
</div>



</body>


	<script src="bootstrap-4.5.3/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap-4.5.3/js/popper.min.js"></script>
    <script  src="bootstrap-4.5.3/js/bootstrap.min.js"></script>
    <script  src="funciones.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
	$(document).ready(function() {
		mostrarNotas();

		$('#btnguardar').click(function() {

		var datos =	$('#frm_notas').serialize();

		insertarNotas(datos);

		$('#frm_notas')[0].reset();
			
		});


		
		
	});




</script>

<script type="text/javascript">
	
$(document).ready(function() {
	$('#btnmodificar').click(function() {

		var datoss =$('#frm_editar').serialize();

		actualizarNotas(datoss);
			
		});

});


</script>
</html>



?>



