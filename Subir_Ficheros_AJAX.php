<?php
	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title></title>
	<script type="text/javascript">
		window.onload=function() {
			document.getElementById('enviar').onclick=enviar
		}
		function enviar() {
			var archivo = document.getElementById('fichero').files
			var datos = new FormData()
			for(i=0; i<archivo.length; i++) {
				datos.append('archivo'+i, archivo[i])
			}
			datos.append('dato','ejemplo subir archivo')
			fetch('recibir_archivos.php', {
				method: 'POST',
				body: datos
			})
			.then(function(respuesta) {
				if (respuesta.ok) {
					return respuesta.text()
				} else {
					console.log(respuesta)
				}
			})
			.then(function(datos) {
				alert(datos)
			})
			.catch(function(error) {
				console.log(error)
				alert(error)
			})
		}
	</script>
</head>
<body>
	<div class="container">
		<h2>Subir archivo</h2>
		<form enctype="multipart/form-data">
			<div class="form-group">
				<input type="file" name="fichero" id="fichero" class="form-control-file" multiple>
			</div>
			<div class="form-group">
				<input type="button" name="enviar" id="enviar"
				value="enviar" class="btn btn-primary">
			</div> 
		</form>
	<div>
</body>
</html>


