<?php
	//recuperar los ficheros
	$ficheros = $_FILES;
	
	$dato = $_POST['dato'];
	foreach ($ficheros as $clave => $datos) {
		echo "$clave: $datos[name] $datos[type]";

		if (move_uploaded_file($datos['tmp_name'], "img/$datos[name]")) {
		echo "Fichero subido correctamente";
		} else {
			echo "Fichero no subido";
		}
	}
?>