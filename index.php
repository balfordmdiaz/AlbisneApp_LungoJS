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
	<meta name="description" content="">
    <meta name="author" content="">
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="cleartype" content="on">

    <!-- iPhone -->
    <link href="http://lungo.tapquo.com/resources/icon-57.png" sizes="57x57" rel="apple-touch-icon">
    <link href="http://lungo.tapquo.com/resources/startup-image-320x460.png" media="(device-width: 320px) and (device-height: 480px)
             and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">

    <!-- iPhone (Retina) -->
    <link href="http://lungo.tapquo.com/resources/icon-114.png" sizes="114x114" rel="apple-touch-icon">
    <link href="http://lungo.tapquo.com/resources/startup-image-640x920.png" media="(device-width: 320px) and (device-height: 480px)
             and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

    <!-- iPhone 5 -->
    <link href="http://lungo.tapquo.com/resources/startup-image-640x1096.png" media="(device-width: 320px) and (device-height: 568px)
             and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

    <!-- iPad -->
    <link href="http://lungo.tapquo.com/resources/icon-72.png" sizes="72x72" rel="apple-touch-icon">
    <link href="http://lungo.tapquo.com/resources/startup-image-768x1004.png" media="(device-width: 768px) and (device-height: 1024px)
             and (orientation: portrait)
             and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">
    <link href="http://lungo.tapquo.com/resources/startup-image-748x1024.png" media="(device-width: 768px) and (device-height: 1024px)
             and (orientation: landscape)
             and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">

    <!-- iPad (Retina) -->
    <link href="http://lungo.tapquo.com/resources/icon-144.png" sizes="144x144" rel="apple-touch-icon">
    <link href="http://lungo.tapquo.com/resources/startup-image-1536x2008.png" media="(device-width: 768px) and (device-height: 1024px)
             and (orientation: portrait)
             and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
    <link href="http://lungo.tapquo.com/resources/startup-image-1496x2048.png" media="(device-width: 768px) and (device-height: 1024px)
             and (orientation: landscape)
             and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">


	<link rel="stylesheet" type="text/css" href="jqm/mycss.css">
	<link rel="stylesheet" type="text/css" href="lungo.css">
    <link rel="stylesheet" type="text/css" href="lungo.icon.css">
    <link rel="stylesheet" type="text/css" href="lungo.theme.css">

	

</head>
<body>

<section id="main-section">
		<header data-title="albisne.com"></header>
				
		<article  id="main-article" class="active">
		 <div id="lista1">
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