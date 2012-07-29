<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Nueva Entrada</title>
	
</head>

<body>

<form action="enviarentrada.php" method="post" accept-charset="utf-8">
	<p>Autor: </p>
	<input type="text" name="autor" value="" id="autor">
	
	<p>Titulo: </p>
	<input type="text" name="titulo" value="" id="titulo">
	
	<p>Entrada: </p>
	<textarea name="mensaje" rows="10" cols="40"></textarea>

	<p><input type="submit" value="Agregar &rarr;" name="agregar"></p>
</form>

</body>
</html>
