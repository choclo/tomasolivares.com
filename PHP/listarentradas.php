
<?php

require_once('db.php');

$conexion = mysql_connect($db_host, $db_user, $db_pass);
	if(!$conexion){
		die('No me puedo conectar a la base de datos! Aca esta: ' . mysql_error());
	}
mysql_select_db($db_name, $conexion);

$sql = 'SELECT * FROM entradas ORDER BY autor ASC';
$result = mysql_query($sql, $conexion);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Listando Entradas</title>
	
</head>

<body>
<?php

echo "<table border='1' cellpadding='2'><tr><td>Autor</td><td>Titulo</td><td>Mensaje</td></tr>";
while($row = mysql_fetch_array($result)) {
	echo "<tr><td>" . $row["autor"] . "</td>" . "<td>" . $row["titulo"] . "</td>" . "<td>" . $row["mensaje"] . "</td>" . "<td><a href=editarentradas.php?id=" . $row["id"] . ">Editar</a></td>" . "<td><a href=eliminarentradas.php?id=" . $row["id"] . ">Eliminar</a></td></tr>";
}
echo "</table>";

mysql_close($conexion);

?>

<br /><a href="nuevaentrada.php">Agregar una nueva entrada</a><br />

</body>
</html>
