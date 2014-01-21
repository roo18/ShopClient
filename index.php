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

	<script type="text/javascript" language="javascript" src="js/jquery-2.0.3.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/bootstrap.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/jquery.animate-colors-min.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js">
	</script>

	
	<script type="text/javascript" language="javascript">


	$(document).ready(function() {
            
            $.ajax({
                dataType: 'json',
                url: 'phps/productos.php',
                success: function(data) {
                   $.each(data, function(index) {
					datos = '<div class="producto"  onclick=""><p id="precio">'+ data[index].precio + ' &euro;</p><img id="imgProd" src="imagenes/imagenesProductos/'+ data[index].Imagen +'.jpg"><div id="descripcion"<p>'+data[index].Nombre+'<br>'+ data[index].Descripcion +'</p></div><div class="carrito"><img src="imagenes/imagenesStatic/carro.png"></div></div>';
                    });
                    $('#listaProducto').html(datos);
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
        	<li id="inicio"></li>
            <li id="perfil">
			<form id="inicioForm" role="form" action="phps/validacion.php" method="post">
  <div class="form-group" id="inicioSesion">
			<strong>Login</strong>
			
					<p>Nick</p>
					<input class="form-control" name="nick">
					<p>Password</p>
					<input class="form-control" type="password" name="pass">
					<input id="loginInput" type="submit" class="btn btn-success" value="Login"></a>
				
	
	<button  class="btn btn-primary" data-toggle="modal" data-target="#myModal">Create Account
	</button>
	
	</li>
           
        </ul>
    </div>
	</form>
	
	<div id="buscador">
<img src="imagenes/imagenesStatic/imgBusc.png">
<input name="buscador" type="text">
</div>
</div>

</div>



<div id="carroRightbar">
<div class="carrito"><img src="imagenes/imagenesStatic/carro.png"><p id="cantidad">3</p></div>

<div id="precioTotal">  <p> Total: 3562.87&euro;</p> </div>
<div id="listaCarro">



<!---------productos comprados-->
<div class="producto" >
    	<div id="cerrar"><img  src="imagenes/imagenesStatic/close.png" onclick="">		</div>
    	<img src="imagenes/imagenesProductos/art6.jpg">
		
       <div id="descripcion">
	   <p id="precioLista">2999.99&euro;</p>
        <p>This is other example from webpage...</p>
		</div>
		
    </div>
	
	<div class="producto" >
    	<div id="cerrar"><img  src="imagenes/imagenesStatic/close.png" onclick="">		</div>
    	<img src="imagenes/imagenesProductos/art7.jpg">
		
        <div id="descripcion">
		<p id="precioLista">1250&euro;</p>
        <p>This is other example from webpage...</p>
		
		</div>
    </div>
	
	<div class="producto" >
    	<div id="cerrar"><img  src="imagenes/imagenesStatic/close.png" onclick="">		</div>
    	<img src="imagenes/imagenesProductos/art5.jpg">
		
        <div id="descripcion">
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
	  
						
						<div class="form-group" id="registro" >
						<form  class="form-horizontal" action="phps/insert.php" method="post">
						Name<input class="form-control" name="nombre"></input>
						Nick<input class="form-control" name="nick"></input>
						E-mail<input class="form-control" name="email"></input>
						Password<input class="form-control"  type="password" name="pass"></input>
						Repeat Password<input class="form-control" type="password" name="repPass"></input>
						Client kind<select class="form-control"><option>Admin</option><option>User</option></select>
								</div>
						<input type="submit" class="btn btn-success" value="Login"></input>
						
						</form>

 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
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
