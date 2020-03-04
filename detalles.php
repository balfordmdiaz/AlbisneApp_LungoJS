<!-- Formador: Msc. Bissmarck Rostran -->
<?php
		include ("utils/conexion.php");
		$id = $_GET["idpro"];
		$sql = "SELECT * FROM productos WHERE idpro=".$id;
		$peticion = mysql_query($sql,$conexion);
		$fila = mysql_fetch_array($peticion);
?>

<!doctype html>
<html es>
<head>
	<title>albisne.com</title>
	<link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" href="jqm/jquery.dataTables.min.css">

	<script type="text/javascript" src="jqm/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="jqm/jquery.mobile-1.2.0.js"></script>

	<link rel="stylesheet" type="text/css" href="lungo.css">
    <link rel="stylesheet" type="text/css" href="lungo.icon.css">
    <link rel="stylesheet" type="text/css" href="lungo.theme.css">


</head>
<body>

<section id="main-section">
	<header data-title="albisne.com"></header>
	
    <article  id="main-article" class="active">
	   <div id="lista1">
	   <p>Bienvenid@s ALBISNE.COM, una aplicación diseñada específicamente para móviles.</p></br>
	   <!-- Mostramos el detalle del producto seleccionado -->

	   <?php			
		         echo '
			         <center>
			         <table width="100%" border="0" data-role="table" id="table-custom-2" data-mode="columntoggle" class="ui-body-d ui-shadow table-stripe ui-responsive" data-column-btn-theme="b" data-column-btn-text="Editar Columnas..." data-column-popup-theme="b">
			        <tr>
			           <td width="124" scope="col"><strong>Contacto:</strong></td>
			           <td width="163" scope="col">'.utf8_encode($fila["contactonom"]).'</td>
			        </tr>
			        <tr>
			           <td scope="row"><strong>Fotografía:</strong></td>
			           <td><img src="'.$fila["fotocontacto"].'" width="140" height="140px"></td>
			        </tr>
			        <tr>
			            <td scope="row"><strong>Ciudad:</strong></td>
			            <td>'.utf8_encode($fila["ciudad"]).'</td>
			        </tr>
			        <tr>
			             <td scope="row"><strong>Teléfono:</strong></td>
			             <td>'.$fila["telefono"].'</td>
			        </tr>
			        <tr>
			              <td scope="row"><strong>Email:</strong></td>
			              <td>'.$fila["contactoemail"].'</td>
			        </tr>
			        <tr>
			             <td scope="row"><strong>Artículo:</strong></td>
			             <td>'.utf8_encode($fila["nompro"]).'</td>
			        </tr>
			        <tr>
			             <td scope="row"><strong>Foto del artículo</strong></td>
			             <td><img src="'.$fila["foto"].'" width="140" height="140px"></td>
			        </tr>
			        <tr>
			             <td scope="row"><strong>Precio</strong></td>
			             <td>'.$fila["moneda"].' '.number_format($fila["precio"], 2, '.', ',').'</td>
			        </tr>
			        <tr>
			             <td scope="row"><strong>Descripción</strong></td>
			             <td>'.utf8_encode($fila["descripcionpro"]).'</td>
			        </tr>
			        </table>
			        </center>
		       ';
	         ?>

			<!-- Fin de la visualización -->


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