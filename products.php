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
<link href="css/products.css" rel="stylesheet" type="text/css" />


 <link type="text/css" href="css/skitter.styles.css" media="all" rel="stylesheet" />
	<script type="text/javascript" language="javascript" src="js/jquery-1.6.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script>

        <script type="text/javascript" language="javascript">


			$(document).ready(function() {
                $(".box_skitter_large").css({width: 820, height: 298}).skitter({numbers:false});
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
			<form role="form">
  <div class="form-group" id="inicioSesion">
			<strong>Login</strong>
	<p>Name</p>
	<input class="form-control">
	<p>Password</p>
	<input class="form-control" type="password">
	<button class="btn btn-group">Start</button>
	<a><strong>Register</strong></a>
	
	</div></form>
	</li>
            <li id="mensajes"><span class="cantidadProducto">0</span></li>
            <li id="carrito"><span class="cantidadProducto">0</span></li>
        </ul>
    </div>
	
	
	<div id="buscador">
<img src="imagenes/imagenesStatic/imgBusc.png">
<input name="buscador" type="text">
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

<div id="contenidoTop">
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


<div >
       <center><h1> The best products </h1></center>
       
    <div class="producto"  onclick="">
    	<p id="precio">2999.99&euro;</p>
    	<a href="#"><img src="imagenes/imagenesProductos/art6.jpg"></a>
		
       <div id="descripcion">
        <p>This is other example from webpage...</p>
		</div>
		<div class="carrito"><img src="imagenes/imagenesStatic/carro.png"></div>
    </div>
    
    <div class="producto"  onclick="">
    	<p id="precio">249.99&euro;</p>
    	<a href="#"><img src="imagenes/imagenesProductos/art7.jpg"></a>
		
        <div id="descripcion">
        <p>This is other example from webpage...</p>
		
		</div><div class="carrito"><img src="imagenes/imagenesStatic/carro.png"></div>
    </div>
    
    <div class="producto"  onclick="">
    	<p id="precio">2499&euro;</p>
    	<a href="#"><img src="imagenes/imagenesProductos/art2.jpg"></a>
		
        <div id="descripcion">
        <p>This is other example from webpage...</p>
		
		</div><div class="carrito"><img src="imagenes/imagenesStatic/carro.png"></div>
    </div>
       
</div>


<div id="listaProductoNuevo">
<div id="productoTitulo">


<p>Order:<select class="form-control">
<option>Searched</option>
<option>Favorites</option>
<option>Solds</option>
</select></p>
<p>
Prize:<select class="form-control">
<option>Highest</option>
<option>Lowest</option>
</select>
</p>

</div>
	<div class="producto"  onclick="">
    	<p id="precio">2999.99&euro;</p>
    	<a href="#"><img src="imagenes/imagenesProductos/art6.jpg"></a>
		
       <div id="descripcion">
        <p>This is other example from webpage...</p>
		</div>
		<div class="carrito"><img src="imagenes/imagenesStatic/carro.png"></div>
    </div>
	
	<div class="producto"  onclick="">
    	<p id="precio">1499.99&euro;</p>
    	<a href="#"><img src="imagenes/imagenesProductos/art9.jpg"></a>
		
       <div id="descripcion">
        <p>This is other example from webpage...</p>
		</div>
		<div class="carrito"><img src="imagenes/imagenesStatic/carro.png"></div>
    </div>
	
	<div class="producto"  onclick="">
    	<p id="precio">3221.99&euro;</p>
    	<a href="#"><img src="imagenes/imagenesProductos/art8.jpg"></a>
		
       <div id="descripcion">
        <p>This is other example from webpage...</p>
		</div>
		<div class="carrito"><img src="imagenes/imagenesStatic/carro.png"></div>
    </div>
    <div class="producto"  onclick="">
    	<p id="precio">249.99&euro;</p>
    	<a href="#"><img src="imagenes/imagenesProductos/art7.jpg"></a>
		
        <div id="descripcion">
        <p>This is other example from webpage...</p>
		
		</div><div class="carrito"><img src="imagenes/imagenesStatic/carro.png"></div>
    </div>
    <div class="producto"  onclick="">
    	<p id="precio">1250&euro;</p>
    	<a href="#"><img src="imagenes/imagenesProductos/art3.jpg"></a>
		
        <div id="descripcion">
        <p>This is other example from webpage...</p>
		
		</div><div class="carrito"><img src="imagenes/imagenesStatic/carro.png"></div>
    </div>
    <div class="producto"  onclick="">
    	<p id="precio">499.95&euro;</p>
    	<a href="#"><img src="imagenes/imagenesProductos/art1.jpg"></a>
		
        <div id="descripcion">
        <p>This is other example from webpage...</p>
		
		</div><div class="carrito"><img src="imagenes/imagenesStatic/carro.png"></div>
    </div>
    <div class="producto"  onclick="">
    	<p id="precio">2499&euro;</p>
    	<a href="#"><img src="imagenes/imagenesProductos/art2.jpg"></a>
		
        <div id="descripcion">
        <p>This is other example from webpage...</p>
		
		</div><div class="carrito"><img src="imagenes/imagenesStatic/carro.png"></div>
    </div>
    <div class="producto"  onclick=""> 
    	<p id="precio">3499&euro;</p>
    	<a href="#"><img src="imagenes/imagenesProductos/art4.jpg"></a>
		
        <div id="descripcion">
        <p>This is other example from webpage...</p>
		
		</div><div class="carrito"><img src="imagenes/imagenesStatic/carro.png"></div>
    </div>
    <div class="producto"  onclick="">
    	<p id="precio">1250&euro;</p>
    	<a href="#"><img src="imagenes/imagenesProductos/art3.jpg"></a>
		
        <div id="descripcion">
        <p>This is other example from webpage...</p>
		
		</div><div class="carrito"><img src="imagenes/imagenesStatic/carro.png"></div>
    </div>
    <div class="producto"  onclick="">
    	<p id="precio">1250&euro;</p>
    	<a href="#"><img src="imagenes/imagenesProductos/art3.jpg"></a>
		
        <div id="descripcion">
        <p>This is other example from webpage...</p>
		
		</div><div class="carrito"><img src="imagenes/imagenesStatic/carro.png"></div>
    </div>
    <div class="producto"  onclick="">
    	<p id="precio">1250&euro;</p>
    	<a href="#"><img src="imagenes/imagenesProductos/art3.jpg"></a>
		
        <div id="descripcion">
        <p>This is other example from webpage...</p>
		
		</div><div class="carrito"><img src="imagenes/imagenesStatic/carro.png"></div>
    </div>
    <div class="producto"  onclick="">
    	<p id="precio">1250&euro;</p>
    	<a href="#"><img src="imagenes/imagenesProductos/art3.jpg"></a>
		
        <div id="descripcion">
        <p>This is other example from webpage...</p>
		
		</div><div class="carrito"><img src="imagenes/imagenesStatic/carro.png"></div>
    </div>
    
    
    <a href="#"><img class="anteriorLista" src="imagenes/Gakuseisean-Ivista-Arrow-Right.ico" height="40" width="40"></a>
    <a href="#"><img class="siguienteLista" src="imagenes/Gakuseisean-Ivista-Arrow-Right.ico" height="40" width="40"></a>
    
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
