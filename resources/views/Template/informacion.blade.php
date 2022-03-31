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

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-mobile" id="content">
								<article id="main">
									<header>
										<h2><a href="#">{{$vj->titulo}}</a></h2>
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
									<a href="{{$vj->url_vj}}" class="button">Visitar Pagina Oficial</a>
								</article>
							</div>
							<div class="col-4 col-12-mobile" id="sidebar">
								<hr class="first" />
								<section>
									<header>
										<h3><a href="#">Accumsan sed penatibus</a></h3>
									</header>
									<p>
										Dolor sed fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
										porttitor phasellus tempus cubilia ultrices tempor sagittis  tellus ante diam nec penatibus dolor cras
										magna tempus feugiat veroeros.
									</p>
									<footer>
										<a href="#" class="button">Learn More</a>
									</footer>
								</section>
								<hr />
								<section>
									<header>
										<h3><a href="#">Sed lorem etiam consequat</a></h3>
									</header>
									<p>
										Tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
									</p>
									<div class="row gtr-50">
										<div class="col-4">
											<a href="#" class="image fit"><img src="images/pic10.jpg" alt="" /></a>
										</div>
										<div class="col-8">
											<h4>Nibh sed cubilia</h4>
											<p>
												Amet nullam fringilla nibh nulla convallis tique ante proin.
											</p>
										</div>
										<div class="col-4">
											<a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
										</div>
										<div class="col-8">
											<h4>Proin sed adipiscing</h4>
											<p>
												Amet nullam fringilla nibh nulla convallis tique ante proin.
											</p>
										</div>
										<div class="col-4">
											<a href="#" class="image fit"><img src="images/pic12.jpg" alt="" /></a>
										</div>
										<div class="col-8">
											<h4>Lorem feugiat magna</h4>
											<p>
												Amet nullam fringilla nibh nulla convallis tique ante proin.
											</p>
										</div>
										<div class="col-4">
											<a href="#" class="image fit"><img src="images/pic13.jpg" alt="" /></a>
										</div>
										<div class="col-8">
											<h4>Sed tempus fringilla</h4>
											<p>
												Amet nullam fringilla nibh nulla convallis tique ante proin.
											</p>
										</div>
										<div class="col-4">
											<a href="#" class="image fit"><img src="images/pic14.jpg" alt="" /></a>
										</div>
										<div class="col-8">
											<h4>Malesuada fermentum</h4>
											<p>
												Amet nullam fringilla nibh nulla convallis tique ante proin.
											</p>
										</div>
									</div>
									<footer>
										<a href="#" class="button">Magna Adipiscing</a>
									</footer>
								</section>
							</div>
						</div>
						<hr />
						<div class="row">
							<article class="col-4 col-12-mobile special">
								<a href="#" class="image featured"><img src="/images/pic07.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Gravida aliquam penatibus</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="col-4 col-12-mobile special">
								<a href="#" class="image featured"><img src="/images/pic08.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Sed quis rhoncus placerat</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="col-4 col-12-mobile special">
								<a href="#" class="image featured"><img src="/images/pic09.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Magna laoreet et aliquam</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
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