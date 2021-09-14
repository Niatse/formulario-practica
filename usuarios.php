<?php 

	$conexion=mysqli_connect('localhost','root','','registro');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<link rel="stylesheet" href="estilousuarios.css">
</head>
<body>
<h1>
	Lista de usuarios
</h1>
<br>

<table>
  <caption>Usuarios</caption>
  <thead>
    <tr>
      <th scope="col">Id Usuario</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>

  		<?php 
		$sql="SELECT * from datos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		
	
    <tr>
      <td data-label="Account"><?php echo $mostrar['id'] ?></td>
      <td data-label="Due Date"><?php echo $mostrar['Nombre'] ?></td>
      <td data-label="Period"><?php echo $mostrar['Email'] ?></td>
       <td data-label="Period"><?php echo $mostrar['fecha_reg'] ?></td>

 
    </tr>
  
    <?php 
	}
	 ?>
   <a href="index.php">
    <button>Volver al registro</button>
  </a> 
  </tbody>
</table>
</body>
</html>