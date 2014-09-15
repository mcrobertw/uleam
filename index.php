
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Campus Uleam</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" href="./js/scripts.js"></script>
</head>
<body>
	<header>
			<img src="./imagenes/logo_uleam.jpg" id="logo">
		
	</header>
	<section>
		
		<?php 
			include 'conexion.php';
			$re=mysql_query("select * from facultad") or die (mysql_error());

			while($f=mysql_fetch_array($re)){

				
		 ?>
		
		
		<div class="producto">
			<center>
					<img src="./facultades/<?php echo $f['imagen'];?>"><br>
					<span><?php echo $f['nombre'];?></span><br>
					<a href="./detalles.php?id=<?php echo $f['id']; ?>">ver</a>
			</center>
		</div>

		<?php 
			}
		 ?>
		<!--
		<div class="producto">
			<center>
					<img src="./productos/computadora.jpg"><br>
					<span>Computadora</span><br>
					<a href="./detalles.php">ver</a>
			</center>
		</div>
		-->
	</section>
</body>
</html>