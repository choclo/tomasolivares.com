<?php

require_once('db.php');

$id = $_GET['id'];

$conexion = mysql_connect($db_host, $db_user, $db_pass);
	if(!$conexion){
		die('No me puedo conectar a la base de datos! Aca esta: ' . mysql_error());
	}
mysql_select_db($db_name, $conexion);

if($_SERVER[HTTP_REFERER] != ''){
	$sql = mysql_query('DELETE FROM entradas where id =' . $id);
	echo 'La entrada ha sido eliminada!<br /><br />';
	echo '<a href="listarentradas.php">Volver a listar entradas</a><br />';
	echo '<a href="nuevaentrada.php">Agregar una nueva entrada</a><br />';
}
else{
	echo 'No puedes ingresar directamente a esta pagina!<br/>';
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>eliminarentradas</title>
	
</head>

<body>


</body>
</html>
