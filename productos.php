<?php
		include ("utils/conexion.php");
		$id = $_GET["idcat"];
		$sql = "SELECT * FROM productos WHERE idcat=".$id;
		//$sql = "SELECT * FROM productos";
		$peticion = mysql_query($sql,$conexion);
?>

<!-- Formador: Msc. Bissmarck Rostran -->
<!doctype html>
<html es>
<head>
	<title>albisne.com</title>
	<link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
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
	   <div id="lista1" >
	   <p>Bienvenid@s ALBISNE.COM, una aplicación diseñada específicamente para móviles.</p><br/>	
			<!-- Programando el acceso a php -->
			<ul data-role="listview" data-inset="true" data-filter="true" data-filter-placeholder="Búsqueda de productos" data-theme="c">
				<!-- Mostramos los productos de la categoría seleccionada -->
                              
				<?php
	                  while ($fila = mysql_fetch_array($peticion)){

		              echo '
			               <li>
				                <a href="detalles.php?idpro='.$fila["idpro"].'" data-transition="slide">
					            <img src="'.$fila["foto"].'" width="40px" height="40px">
					            <h3>Nombre: '.utf8_encode($fila["nompro"]).'</h3>
					            <p>Precio: '.$fila["moneda"].' '.number_format($fila["precio"], 2, '.', ',').'</p>
				                </a>
			                </li>
		                ';
	                   }
	            ?>
				
				<!-- Fin de la visualización -->
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
				 <a href="javascript:history.back(-1);"  data-view-article="main-article" data-icon="back" class="active">Regresar</a>
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