<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>{{$vj->titulo}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
	</head>
	<body class="right-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="/" id="logo">KEYBOARD WARRIOR</a></h1>
							</header>
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
												<li><a href="{{route('busquedaGenero.videojuegos','Battle Royale')}}">Battle Royal</a></li>
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

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-mobile" id="content">
								<article id="main">
									<header>
										<h2>{{$vj->titulo}}</h2>
										<p>
											Fecha de estreno: {{$vj->fecha_estreno}}
										</p>
									</header>
									<a href="#" class="image featured"><img src="{{$vj->miniatura}}" alt="" /></a>
									<p>
									Genero: {{$vj->genero}}	<br>
									{{$vj->descripcion}} <br>
									Genero: {{$vj->genero}} <br>
									Plataforma: {{$vj->descripcion}} <br>
									Publisher: {{$vj->publisher}} <br>
									Desarrollador: {{$vj->desarrollador}}
									</p>
									
								</article>
							</div>
							<div class="col-4 col-12-mobile" id="sidebar">
								<hr class="first" />
								<section>
									<header>
										<h3><a href="#">Ver mas juegos de {{$vj->genero}}</a></h3>
									</header>
									<p>
										
									</p>
									<footer>
										<a href="{{route('busquedaGenero.videojuegos',$vj->genero)}}" class="button">Ver mas</a>
									</footer>
								</section>
								<hr />
								<section>
									<header>
										<h3><a href="#">Te interesa descargar el juego?</a></h3>
									</header>
									<p>
										Puedes visitar la pagina oficial para descargar dando clic en el boton.
									</p>
									
									<footer>
										<a href="{{$vj->url_vj}}" class="button">Visitar pagina Oficial</a>
									</footer>
								</section>
							</div>
						</div>
						<hr />
						<div class="row">
						<section id="features" class="container special">
						<header>
							<h2>Si te interesa ver reseñas de peliculas te puede interesar lo siguiente</h2>
							<p>From the NY Times</p>
						</header>
						<div class="row">
							@foreach($movie as $test)
							@if($loop->index >=17)
							<article class="col-4 col-12-mobile special">
								<a href="{{$test['url']}}" class="image featured"><img src="{{$test['imagen']}}" alt="" /></a>
								<header>
									<h3><a href="{{$test['url']}}">{{$test['titulo']}}</a></h3>
								</header>
								<p>
								{{$test['resumen']}}
								</p>
							</article>
							@endif
							@endforeach
						</div>
					</div>

				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">

						</div>
						<hr />
						<div class="row">
							<div class="col-12">

								<!-- Contact -->
								<section class="contact">
										<header>
											<h3>Universidad Politecnica de Tecamac</h3>
										</header>
										<p></p>
										<ul class="icons">
											<li><a href="https://twitter.com/UPTecamac?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="https://es-la.facebook.com/UniversidadPolitecnicadeTecamac/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="https://www.instagram.com/uptecamac/?hl=es" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Creado por Brandon Duran</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/jquery.dropotron.min.js"></script>
			<script src="/assets/js/jquery.scrolly.min.js"></script>
			<script src="/assets/js/jquery.scrollex.min.js"></script>
			<script src="/assets/js/browser.min.js"></script>
			<script src="/assets/js/breakpoints.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<script src="/assets/js/main.js"></script>

	</body>
</html>