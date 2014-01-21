<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title>ShopWeb</title>
<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
<link href="css/tiendaCSS.css" rel="stylesheet" type="text/css" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="css/skitter.styles.css" media="all" rel="stylesheet" />

	<script type="text/javascript" language="javascript" src="js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script>
	
	<script type="text/javascript" language="javascript" src="js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script>

        <script type="text/javascript" language="javascript">


			$(document).ready(function() {
                $(".box_skitter_large").css({width: 820, height: 298}).skitter({numbers:false});
            });
			
			//--------------------------------
			
			
		$('.boton2').click( function() {
			$.ajax({
				type: 'POST',
				url: 'ejemplo2.php',
				data: 'nombre=Pepe&apellido=Perez',
				success: function(data){
					$('.resultados').html(data);
				}
			});
		});
		
		
        </script>

		
   

</head>


<body>



	
	
	
	

<div id="topbar">
	<div id="logotopbar"></div>
	
    <div id="menutopbar">
	
    	<ul>
        	<a href="indexLogeado.php"><li id="inicio" ></li></a>
            <a href="PerfilUsuario.php"><li id="perfil"></li></a>
			
            <a href="mensajes.php"> <li id="mensajes"><span class="cantidadProducto">0</span></li></a>
            <a href="carrito.php"><li id="carrito"><span class="cantidadProducto">0</span></li></a>
			
        </ul>
		</div>
		
	<div id="menutopbar2">
    <ul>
	
	<a href="index.php"><li id="salir"></li></a>
	</ul>
	</div>
	
	
	<div id="buscador">
	<img src="imagenes/imagenesStatic/imgBusc.png">
	<input name="buscador" type="text">
	</div>
</div>



<div id="carroRightbar">
 <a href="carrito.php"><div class="carrito"><img src="imagenes/imagenesStatic/carro.png"><p id="cantidad">3</p></div>
</a>
<div id="precioTotal">  <p> Total: 3562.87&euro;</p> </div>
<div id="listaCarro">



<!---------productos comprados-->
 <a href="description.php"><div class="producto" >
    	<div id="cerrar"><img  src="imagenes/imagenesStatic/close.png" onclick="">		</div>
    	<img id="imgProd" src="imagenes/imagenesProductos/art6.jpg">
		
       <div id="description">
	   <p id="precioLista">2999.99&euro;</p>
        <p>This is other example from webpage...</p>
		</div>
		
    </div></a>
	
	<div class="producto" >
    	<div id="cerrar"><img  src="imagenes/imagenesStatic/close.png" onclick="">		</div>
    	<img id='imgProd' src="imagenes/imagenesProductos/art7.jpg">
		
        <div id="description">
		<p id="precioLista">1250&euro;</p>
        <p>This is other example from webpage...</p>
		
		</div>
    </div>
	
	<div class="producto" >
    	<div id="cerrar"><img  src="imagenes/imagenesStatic/close.png" onclick="">		</div>
    	<img id='imgProd' src="imagenes/imagenesProductos/art5.jpg">
		
        <div id="description">
		<p id="precioLista">1250&euro;</p>
        <p>This is other example from webpage...</p>
		
		</div>
    </div>
	
<!--------- fin productos comprados-->
</div>
</div>

<div id="cabecera">

<div id="logo"><img src="imagenes/logo2.png"></div>
<div id="sublogo"><h1><img src="imagenes/subLogo.png"></h1></div>

</div>


<div id="menu">


</div>

<div id="contenido">





<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
	  
						<form  class="form-horizontal">
						<div class="form-group" id="registro" >
						Name<input class="form-control"></input>
						Nick<input class="form-control"></input>
						E-mail<input class="form-control"></input>
						Password<input class="form-control"  type="password" data-toggle="popover" title="" data-content="And here's some amazing content. It's very engaging. right?" role="button" data-original-title="A Title"></input>
						Repeat Password<input class="form-control" type="password"></input>
						Client kind<select class="form-control"><option>Admin</option><option>User</option></select>

						
						</div>
						</form>

 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Login</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="contenidoTopIndex">
<div id="MPrincipal">
<ul>
<li class="btn btn-success" onclick="">PC</li>
<li class="btn btn-success" onclick="">Laptop</li>
<li class="btn btn-success" onclick="">Keyboards</li>
<li class="btn btn-success" onclick="">Cameras</li>
<li class="btn btn-success" onclick="">Memory</li>
<li class="btn btn-success" onclick="">Smart Phones</li>
<li class="btn btn-success" onclick="">Tardis</li>
<li class="btn btn-success" onclick="">Other Stuff</li>
</ul>
</div>


<div id="carrusel">
       <div class="box_skitter box_skitter_large">
                            <ul>
                                <li>
                                    <a href="#"><img src="imagenes/slider/Slider1.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="imagenes/slider/Slider2.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="imagenes/slider/Slider3.jpg"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
					
					
</div>


<div id="listaProducto">
<div id="productoTitulo">


<p>Order:<select class="form-control">
<option>Searched</option>
<option>Favorites</option>
<option>Solds</option>
</select>
</p>

</div>
	<?php
	
	$db=mysql_connect("localhost","root","")or die("Connection Error:");
	mysql_select_db("proyecto2_tienda")or die ("Error connecting db");
	
	$SQL="SELECT * FROM producto";
	$resultado=mysql_query($SQL) or die("Couldnt execute query1 ");
	
	while($fila=mysql_fetch_array($resultado,MYSQL_ASSOC)){

	echo
	"
	<div class='producto'  onclick=''>
    	<p id='precio'>".$fila['precio']." &euro;</p>
    	<img id='imgProd' src='imagenes/imagenesProductos/".$fila['Imagen'].".jpg'>
		
       <div id='descripcion'>
        <p>".$fila['Nombre']."<br>".$fila['Descripcion']."</p>
		</div>
		<div class='carrito'><img src='imagenes/imagenesStatic/carro.png'></div>
    </div>
			";
			}
			?>
	
	
</div>

</div>





<div id="pie">
<div id="LegalStuff">
<a href="">Legal Terms</a>
<a href="">Security</a>
<a href="">Privacy</a>
<a href="">Rate</a>
<a href="">Contact</a> 
<a href="">Web Map</a>
</div>


<div id="icons">
<img class="icon-footer" src="imagenes/icons/facebook24.png">
<img class="icon-footer" src="imagenes/icons/twitter14.png">
<img class="icon-footer" src="imagenes/icons/google17.png">
<img class="icon-footer" src="imagenes/icons/social68.png">
</div>
<div id="icons">
&copy; PC Store 2013. Spain. All rights reserved.<br />
Proyecto 2 - Tienda
</div>
</div>



</body>
</html>
