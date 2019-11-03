<?php
	//recuperar el archivo
	$fichero = $_FILES['archivo'];
	$dato = $_POST['dato'];
	//que queremos hacer con el archivo
	echo "$fichero[name] $fichero[size] $fichero[tmp_name] $fichero[type]";
	//guardar el archivo en una carpeta del servidor
	if (move_uploaded_file($fichero['tmp_name'], "img/$fichero[name]")) {
		echo "Fichero subido correctamente";
	} else {
		echo "Fichero no subido";
	}
?>