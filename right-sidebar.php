<!DOCTYPE HTML>
<?php
include("administrador/config/bd.php");

$sentenciaSQL= $conexion->prepare("SELECT*FROM ataudes");
$sentenciaSQL->execute();
$listaAtaudes=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Ataudes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="carritostyle.css">
		
		 <script src="app.js" async></script>

	</head>
	<body class="right-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header" class="wrapper">

					<!-- Logo -->
						<div id="logo">
							<h1><a href="index.php">"La despedida"</a></h1>
							<p>Servicios funerarios</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.php">Menu</a></li>
								
								<li><a href="no-sidebar.php">Carrozas funebres</a></li>
								<li>
									<p>Reporta un fallecimiento: 5617183188</p>
								</li>
							
							</ul>
							
						</nav>

				</section>

			<!-- Main -->
				<section id="main" class="wrapper style2">
					<div class="title">Ataudes</div>
					<div class="container">
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
									<div id="content">
										<article class="box post">
											<header class="style1">
												<h2>Tipos de ataudes</h2>
												<p>Aqui encontraras la variedad de ataudes que te ofrecemos</p>
											</header>
											<a class="image featured">
												<img src="images/ataudprincipal.jpg" alt="" />
											</a>
											<p>Nuestra variedad de ataudes que te ofrecemos son altamente exclusivos ya que muchos de ellos cuentan con madera de alta calidad y son hechos por nuestros mejores carpinteros, esto con la finalidad de que su difunto pueda contar con un servicio de alta calidad, esta madera tiene una muy lenta biodegradacion y la madera especial que utilizamos permitira que aguante bastante tiempo en contacto con la teirra, la humedad, los insectos entre otros.</p>
													<img src="images/ataudsecundario.jpg" alt="" width="00px"/>
											<header class="style1">
											<h2>Ataudes especiales</h2>
								
										</article>
										
										<section class="contenedor">
									<div class="contenedor-items">
            <div class="item">

										
<img src="images/ataud9.jpg" alt="" class="img-item">
            
            <p><span class="titulo-item">Ataud cafe de madera de pino</span>
              <span class="precio-item">$1300.00</span></p>
			  <button class="boton-item ">Agregar</button>
            
          
        </div>
        <div class="item">
<img src="images/ataud10.jpg" alt="" class="img-item">
            
            <p><span class="titulo-item">Ataud de madera abeto color natural</span>
              <span class="precio-item">$1300.00</span></p>
              <button class="boton-item">Agregar </button>
            
          
        </div>
        <div class="item">
<img src="images/ataud11.jpg" alt="" class="img-item">
            
            <p><span class="titulo-item">Ataud cafe con base de madera de cedro</span>
              <span class="precio-item">$1300.00</span></p>
              <button class="boton-item">Agregar </button>
            
          
        </div>
        <div class="item">
<img src="images/ataud12.jpg" alt="" class="img-item">
            
            <p><span class="titulo-item">Ataud cafe de madera de roble</span>
              <span class="precio-item">$1300.00</span></p>
              <button class="boton-item">Agregar </button>
            
          
        </div>
							</section>
							
										
										
										
										
										
										<div class="row gtr-150">
											<div class="col-6 col-12-small">
												<section class="box">
													
													
													<img src="images/ataudsecundario.jpg" alt="" width="800px"/></a>
													
												</section>
											</div>
										</div>
									</div>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="box">
											
											
												<div class="row aln-center">
						<div class="item">
							<div class="col-4 col-12-medium">
								<section class="highlight">
								<header class="style1">
									<h2>Ataudes ordinarios</h2>
									<section class="contenedor">
									<div class="contenedor-items">
            <div class="item">

<img src="images/ataud1.jpg" alt="" class="img-item">
            
            <p><span class="titulo-item">Ataud cafe de madera de nogal con detalles en plata</span>
              <span class="precio-item">$800.00</span></p>
			  
              <button class="boton-item">Agregar </button>
            
          
        </div>
          <br>
            <div class="item">
<img src="images/ataud2.jpg" alt="" class="img-item">
          
            <p><span class="titulo-item">Ataud cafe de madera de nogal con detalles en oro</span>
                 <span class="precio-item">$800.00</span></p>
              <button class="boton-item">Agregar </button>
            
        </div>
      
      
            <div class="item">
  <br>
<img src="images/ataud3.jpg" alt="" class="img-item">
            
            <p><span class="titulo-item">Ataud negro de madera de nogal con detalles en cafe</span>
              <span class="precio-item">$800.00</span></p>
              <button class="boton-item">Agregar</button>
            
          
        </div>

            <div class="item">
  <br>
<img src="images/ataud4.jpg" alt="" class="img-item">
            
            <p><span class="titulo-item">Ataud cafe de madera de nogal con cristo</span>
              <span class="precio-item">$800.00</span></p>
              <button class="boton-item">Agregar </button>
            
          
        </div>
     
            <div class="item">
  <br>
<img src="images/ataud5.jpg" alt="" class="img-item">
            
            <p><span class="titulo-item">Ataud cafe de madera de nogal con detalles en bronce</span>
              <span class="precio-item">$800.00</span></p>
              <button class="boton-item">Agregar </button>
            
          
        </div>
  
            
    
        </div>
        </div>
        </div>
      
        
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
                
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$00.00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="images/l_f/logo.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$00.00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $00.00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
									
	
								</section>
							</div>
						</div>
					</div>
				</section>
				<section id="main" class="wrapper style2">
					<div class="title">Modelos a la venta proximamente</div>
					<div class="container">
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">
				
					<?php foreach($listaAtaudes as $ataud){ ?>
		   <div class="col-md-4">

				<div class="card">

					<img class="card-img-top" src="./images/<?php echo $ataud['imagen']; ?>"  width="130 "alt="">

					<div class="card-body">

						<h4 class="card-title"><?php echo $ataud['nombre']; ?></h4>
					
					</div>
				</div>
			</div>
			<br>
			<?php } ?>
			
						

					</section>
											


			<section id="footer" class="wrapper">
					
					<div class="container">
						<header class="style1">
							<h2>Contactanos</h2>
							<p>
									Envianos un correo electronico, por nuestras redes sociales o por telefono.
							</p>
						</header>
						<div class="row">
							<div class="col-6 col-12-medium">

						
								<!-- Contact -->
								<section class="feature-list small">
										<div class="row">
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon solid fa-home">Direccion</h3>
													<p>
														Untitled Corp<br />
														1234 Somewhere Rd<br />
														Nashville, TN 00000
													</p>
												</section>
											</div>
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon solid fa-comment">Redes sociales</h3>
													<p>
														
														<a href="https://instagram.com/la_despedida_funeraria?igshid=OGQ5ZDc2ODk2ZA==">Funeraria La despedida</a><br />
														
													</p>
												</section>
											</div>
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon solid fa-envelope">Correo</h3>
													<p>
														<a href="mailto:funerarialadespedida6@gmail.com">funerarialadespedida6@gmail.com</a>
													</p>
												</section>
											</div>
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon solid fa-phone">Telefono</h3>
													<p>
														56 1718 3188
				
													</p>
												</section>
											</div>
										</div>
									</section>

							</div>
						</div>
						<div id="copyright">
							<ul>
								<li>&copy; La despedida.</li>
							</ul>
						</div>
					</div>
				</section>

		</div>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
