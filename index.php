<?php
require_once('includes/funciones.inc.php');
?>
<!DOCTYPE>
<html>
	<head>
		<title>Compresi&oacute;n de archivos con PclZip</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	</head>
	<body>
		<div id="contenedor">
			<ul class="listado">
				<?php
					
					$carpetas = obtener_carpetas('archivos');

					foreach ($carpetas as $carpeta) {
					echo  '<li><a href="descargar_zip.php?folder=' .  $carpeta .  '">' . $carpeta . '</a></li>';
					}
				?>
			</ul>
		</div>
	</body>
</html>