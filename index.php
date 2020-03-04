<!-- Formador: Msc. Bissmarck Rostran -->

<?php
		include("utils/conexion.php");
		$sql = "SELECT * FROM categorias";
		$peticion = mysql_query($sql,$conexion);
?>

<!doctype html>
<html es>
<head>
	<link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
	<title>albisne.com</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="jqm/mycss.css">

	<link rel="stylesheet" type="text/css" href="lungo.css">
    <link rel="stylesheet" type="text/css" href="lungo.icon.css">
    <link rel="stylesheet" type="text/css" href="lungo.theme.css">

</head>
<body>

<section id="main-section">
		 <header data-title="albisne.com"></header>
	     <article  id="main-article" class="active">
		 <div id="lista1" style="height:97%; overflow: scroll;">
			<h3>Introducción</h3>
			Bienvenid@s ALBISNE.COM, una aplicación diseñada específicamente para móviles.</p></br>
			
			<!-- Programando el acceso a php -->
			<ul data-role="listview" data-inset="true" data-filter="true" data-filter-placeholder="Búsqueda de categorías" data-theme="c">
				<!-- Aquí va el código que muestra las categorías -->

				<?php
	                 while ($fila = mysql_fetch_array($peticion)){

		            echo '
			            <li>
				             <a href="productos.php?idcat='.$fila["idcat"].'" data-transition="slide">
					         <img src="'.$fila["fotocat"].'" width="40px" height="40px">
					         <h3>'.utf8_encode($fila["nombre"]).'</h3>
					         <p>'.utf8_encode($fila["descripcion"]).'</p>
				             </a>
			             </li>
		                 ';
	                    }
				?>
				
				<!-- Fin de las categorias -->
			</ul>
			</div>

		  </article>

		  <article  id="dialog-1">
		       <!-- Programando el Back-End -->
               <!-- Programando la segunda página -->    
	           <div data-role="page" data-theme="c" id="backend">
		           <div data-role="header" data-theme="c" data-position="fixed">
			         <h3>albisne.com</h3>
		           </div>
		        <div data-role="content">
			      <h3>OPCIONES ADMINISTRATIVAS:</h3>
			        <ul data-role="listview" data-inset="true" data-theme="b">
				     <li><a href="">¿Cómo contactarnos?</a></li>
				     <li><a href="">¿Cómo funciona?</a></li>
				     <li><a href="">¿Precios por publicar?</a></li>
			       </ul>
	            </div>
			  </div>
		  </article>
		  
		  <article  id="dialog-2">
			  <!-- Programando la segunda página -->    
	          <div data-role="page" data-theme="c" id="opciones">
		      <div data-role="header" data-theme="c" data-position="fixed">
			        <h3>albisne.com</h3>
		      </div>
		      <div data-role="content">
			    <h3>OPCIONES DE MENÚ:</h3>
			    <ul data-role="listview" data-inset="true" data-theme="b">
				   <li><a href="">¿Cómo contactarnos?</a></li>
				   <li><a href="">¿Cómo funciona?</a></li>
				   <li><a href="">¿Precios por publicar?</a></li>
			    </ul>
		      </div>
	          </div>
		  </article>
		  
		  <footer>
                <nav>
					<a href="#" data-view-article="main-article" data-icon="help" class="active">Acerca de </a>
					<a href="#"  data-view-article="dialog-1" data-icon="help" class="active">Admin</a>
		            <a href="#" data-view-article="dialog-2" data-icon="help" class="active">Menu</a>
                </nav>
		  </footer>
	
    


</section>

	<script type="text/javascript" src="quo.js"></script>
    <script type="text/javascript" src="lungo.js"></script>
    <script>
			Lungo.init({});
	</script>  

</body>
</html>