<?php

extract($_POST);
require_once('db.php');

if(!isset($agregar)){
	echo 'No puedes acceder a esta pagina directamente!<br /><br />';
}
else {
	if($autor != '' && $titulo != '' && $mensaje != '')
		{
			$conexion = mysql_connect($db_host, $db_user, $db_pass);
			if(!$conexion) {
				die('No puedo conectarme a la base de datos! El error es: ' . mysql_error());
			}
			$db = mysql_select_db($db_name, $conexion);
			if(!$db) {
				die('No puedo conectarme a la base de datos! El error es: ' . mysql_error());
			}

			$sql = "INSERT INTO entradas (autor, titulo, mensaje)" . "VALUES ('$autor', '$titulo', '$mensaje')";
			$resultado = mysql_query($sql);

			mysql_close($conexion);

			echo 'Gracias por enviar la entrada!<br /><br />';

			echo 'Tu entrada fue la siguiente:<br /><br />';

			echo 'Titulo: ' . $titulo;
			echo '<br />Autor: ' . $autor;
			echo '<br />Mensaje: ' . $mensaje;
		}
	else
		{
			echo 'No puedes dejar ningun campo en blanco!<br /><br />';
		}
	
}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Resultado nueva entrada</title>
	
</head>

<body>

<br /><br /><a href='nuevaentrada.php'>Agregar nueva entrada</a><br />
<a href='listarentradas.php'>Ver las entradas</a>

</body>
</html>
