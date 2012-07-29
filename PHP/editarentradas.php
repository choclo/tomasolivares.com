<?php
require_once('db.php');

$conexion = mysql_connect($db_host, $db_user, $db_pass);
	if(!$conexion) {
		die('No me puedo conectar a la base de datos! Aca esta: ' . mysql_error());
	}
mysql_select_db($db_name, $conexion);

if(isset($_POST['env'])) {
	extract($_POST);
	$updatesql = "UPDATE entradas SET autor = \" $autor \" , titulo = \" $titulo \", mensaje = \" $mensaje \" WHERE id = \"$id\"";
	$result = mysql_query($updatesql, $conexion);
	echo 'Entrada Actualizada!';
}
else {
	$id = $_GET['id'];
	$sql = 'SELECT * FROM entradas WHERE id = '.$id.'';
	$result = mysql_query($sql, $conexion);
	$row = mysql_fetch_assoc($result);
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>editarentradas</title>
	
</head>

<body>

<form action="editarentradas.php?id=<?php echo $row['id']; ?>" method="post" accept-charset="utf-8">
	<p>Autor: </p>
	<input type="text" name="autor" value="<?php echo $row["autor"]; ?>" id="autor">
	
	<p>Titulo: </p>
	<input type="text" name="titulo" value="<?php echo $row["titulo"]; ?>" id="titulo">
	
	<p>Entrada: </p>
	<textarea name="mensaje" rows="10" cols="40"><?php echo $row["mensaje"]; ?></textarea>
	<input type="hidden" value="env" value"nada">
	<p><input type="submit" value="Agregar &rarr;" name="agregarrs"><input type="button" value="Cancelar" onclick="history.back()"></p>
	<input type="hidden" name="env" value="noseytu" />
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
</form>

</body>
</html>
