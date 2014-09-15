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
		<h1>Detalles</h1>
		
	</header>
	<section>
		
		<?php 
			include 'conexion.php';
			$re=mysql_query("select * from facultad where id=".$_GET['id']) or die (mysql_error());

			while($f=mysql_fetch_array($re)){

				
		 ?>
		

		
			<center>
					<img src="./facultades/<?php echo $f['imagen'];?>" WIDTH=400 HEIGHT=400><br>
					<span><?php echo $f['nombre'];?></span><br>
					<span><?php echo $f['antiguedad'];?></span> a&ntilde;os<br>
					
			</center>
			

		<?php 
			}
		 ?>
		
	</section>
</body>
</html>