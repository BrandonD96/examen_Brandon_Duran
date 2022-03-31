<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Inicio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="/" id="logo">KEYBOARD WARRIOR</a></h1>
								<hr/>
								<p> </p>
							</header>
							<footer>
								<a href="#banner" class="button circled scrolly">Start</a>
							</footer>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="/">Home</a></li>
								<li>
									<a href="#">Buscar Por...</a>
									<ul>
										<li>
											<a href="#">Genero &hellip;</a>
											<ul>
												<li><a href="{{route('busquedaGenero.videojuegos','Action RPG')}}">Action RPG</a></li>
												<li><a href="{{route('busquedaGenero.videojuegos','ARPG')}}">ARPG</a></li>
												<li><a href="{{route('busquedaGenero.videojuegos','Battle Royal')}}">Battle Royal</a></li>
												<li><a href="{{route('busquedaGenero.videojuegos','Card')}}">Card</a></li>
                                                <li><a href="{{route('busquedaGenero.videojuegos','Card Game')}}">Card Game</a></li>
                                                <li><a href="{{route('busquedaGenero.videojuegos','Sports')}}">Deportes</a></li>
                                                <li><a href="{{route('busquedaGenero.videojuegos','Strategy')}}">Estrategia</a></li>
                                                <li><a href="{{route('busquedaGenero.videojuegos','Fantasy')}}">Fantasia</a></li>
                                                <li><a href="{{route('busquedaGenero.videojuegos','MMO')}}">MMO</a></li>
                                                <li><a href="{{route('busquedaGenero.videojuegos','MMORPG')}}">MMORPG</a></li>
                                                <li><a href="{{route('busquedaGenero.videojuegos','MOBA')}}">MOBA</a></li>
                                                <li><a href="{{route('busquedaGenero.videojuegos','Shooter')}}">Shooter</a></li>
                                                <li><a href="{{route('busquedaGenero.videojuegos','Social')}}">Social</a></li>
                                                <li><a href="{{route('busquedaGenero.videojuegos','Fighting')}}">Peleas</a></li>
											</ul>
										</li>
                                        <li>
											<a href="#">Plataforma &hellip;</a>
											<ul>
												<li><a href="{{route('busquedaPlataforma.videojuegos','PC (Windows)')}}">PC</a></li>
												<li><a href="{{route('busquedaPlataforma.videojuegos','Web Browser')}}">Navegador Web</a></li>
											</ul>
										</li>
										<li></li>
									</ul>
								</li>
							</ul>
						</nav>

				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Hola. Que videojuego buscas?</h2>
						<p>
							Esta pagina mostrara algunos videojuegos que son gratis y puedes descargar desde su pagina oficial.
						</p>
					</header>
				</section>

			<!-- Carousel -->
				<section class="carousel">
					<div class="reel">
						@foreach($vj as $vg)
						<article>
							<a href="{{route('mostrarJuego.videojuegos',$vg->id)}}" class="image featured"><img src="{{$vg->miniatura}}" alt="" /></a>
							<header>
								<h3><a href="{{route('mostrarJuego.videojuegos',$vg->id)}}">{{$vg->titulo}}</a></h3>
							</header>
							<p>Genero: {{$vg->genero}}</p>
							<p>Fecha de estreno: {{$vg->fecha_estreno}}</p>
						</article>
						@endforeach
					</div>
				</section>

			<!-- Main -->
				<div class="wrapper style2">

					<article id="main" class="container special">
						<a href="{{route('mostrarJuego.videojuegos',$randomVJ->id)}}" class="image featured"><img src="{{$randomVJ->miniatura}}" alt="" /></a>
						<header>
							<h2><a href="{{route('mostrarJuego.videojuegos',$randomVJ->id)}}">{{$randomVJ->titulo}}</a></h2>
							<p>
							{{$randomVJ->descripcion}}
							</p>
						</header>
						<footer>
							<a href="{{$randomVJ->url_vj}}" class="button">Visitar Pagina Oficial</a>
						</footer>
					</article>

				</div>

			<!-- Features -->
				<div class="wrapper style1">

					<section id="features" class="container special">
						<header>
							<h2>Si quieres ver reseñas de peliculas te puede interesar lo siguiente</h2>
							<p>From the NY Times</p>
						</header>
						<div class="row">
							
							@foreach($item as $test)
							<article class="col-4 col-12-mobile special">
								<a href="#" class="image featured"><img src="{{$test['imagen']}}" alt="" /></a>
								<header>
									<h3><a href="#">Sed quis rhoncus placerat</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							@endforeach
							
						</div>
					</section>

				</div>

			<!-- Footer -->
				<div id="footer">
					
						<hr />
						<div class="row">
							<div class="col-12">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Nisl turpis nascetur interdum?</h3>
										</header>
										<p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
										<ul class="icons">
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>