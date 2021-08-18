function mostrarNotas() {
	$.ajax({
			url:"ajax/ajaxmostrarnotas.php",			
			success:function(data){			
			$('#result').html(data);						

			}
	});
}

function insertarNotas(datos){
	$.ajax({
			url:"ajax/ajaxinsertarnotas.php",
			method:"post",
			data: datos,
			success:function(data)
			{
			console.log(data);				
				if(data==1){					
					$('#result').html(data);
					alert_InsertarNota();			
					mostrarNotas();
				}else{
					error();
				}
			
										

			}
	});
	
}

function actualizarNotas(datos){
	$.ajax({
			url:"ajax/ajaxmodificarnotas.php",
			method:"post",
			data: datos,
			success:function(data)
			{
				if(data == 1){

				$('#result').html(data);
				alert_ModificarNota();
				mostrarNotas();	
				}else{
					error();
				}		

			}
	});
	
}

function eliminarNotas(id){

	cadena="id=" + id;

	$.ajax({
			url:"ajax/ajaxeliminarnotas.php",
			method:"post",
			data: cadena,
			success:function(data)
			{

				if(data == 1){
				$('#result').html(data);
				mostrarNotas();
				}else{
					error();
				}

			}
	});
}

function alert_EliminarNota(id){


    Swal.fire({
  title: 'Está seguro que desea eliminar?',  
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',  
  confirmButtonText: 'Eliminar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
       Swal.fire(
      'Eliminado!',
      'El registro ha sido eliminado.',
      'success'
    )
    eliminarNotas(id);    

  }
})  

}


function alert_InsertarNota() {
	Swal.fire({
  title: 'Nota Guardada Correctamente', 
  icon: 'success',
 showConfirmButton: false,
 allowOutsideClick: false,
  timer: 2000 
})

}


function alert_ModificarNota() {
	Swal.fire({
  title: 'Nota Modificada Correctamente', 
  icon: 'success',
 showConfirmButton: false,
 allowOutsideClick: false,
  timer: 2000
 
}).then((result) => {
  mostrarNotas();
})

}




function error() {
	Swal.fire(
		  'Error!',
		  'Ha ocurrido un error, Intente nuevamente',
		  'error'
		)
}




function modificarNotas(id){

	cadena="id=" + id;

	$.ajax({
			url:"ajax/ajaxtraerdatos.php",
			method:"POST",
			data: cadena,
			success:function(res)
			{			
				datos = jQuery.parseJSON(res);
				$('#id').val(datos['id']);
				$('#titulo').val(datos['titulo']);
				$('#contenido').val(datos['contenido']);

			}
	});
}