<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
<form method ="post">
   <h1>Bievenido viejo</h1>
   <input type="text" name="name" placeholder="Nombre completo">
   <input type="text" name="email" placeholder="Email">
   <input type="submit" name="register">
</form>

<?php 
        include("registrar.php");
        ?>
  
<a href="usuarios.php">
    <button>Ver usuarios registrados</button>
  </a> 
</body>
</html>