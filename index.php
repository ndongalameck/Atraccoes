<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="Vawel" />
	<meta name="description" content="Atracções é um grupo de comunicação e imagem, fundada no início de 2015 pelo Assessor de Imprensa e Jornalista Angolano António Matos." />
	<meta name="keywords" content="Moda, Beleza, Entretenimento, Música, Notícias" />
	<meta name="robots" content="index,follow" />
	<meta name="googlebot" content="index,follow" />
	<title>Atracções - Inicial</title>
	<link rel="icon" type="image/png" href="code/images/logo/favicon.png" />
	<link rel="stylesheet" type="text/css" href="code/styles/bootstrap/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="code/styles/atraccoes/app.css" />
	<link rel="stylesheet" type="text/css" href="code/styles/atraccoes/icons.css" />
	<link rel="stylesheet" type="text/css" href="code/styles/atraccoes/responsive.css" />
	<script type="text/javascript" src="code/scripts/jquery/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="code/scripts/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="code/scripts/atraccoes/app.js"></script>
</head>
<body>
	<div class="container">
		<?php require 'code/master/header.req.php'; ?>
		<script type="text/javascript">
			document.getElementById("home").className="active";
    	</script>
				<div class="row home-box">
			<div id="c-slider" class="carousel slide banner" data-ride="carousel" data-pause="focus">
				<ol class="carousel-indicators">
					<li data-target="#c-slider" data-slide-to="0" class="active"></li>
					<li data-target="#c-slider" data-slide-to="1"></li>
					<li data-target="#c-slider" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="fashion/news/images/5.jpg" alt="Primeira Imagem.">
						<div class="carousel-caption main-slide">
							<a href="#">
								<h2>Primeira Imagem.</h2>
								<p class="hidden-xs">Essa é a primeira imagem do slide.</p>
							</a>
						</div>
					</div>
					<div class="item">
						<img src="fashion/news/images/8.jpg" alt="Segunda Imagem.">
						<div class="carousel-caption main-slide">
							<a href="#">
								<h2>Segunda Imagem.</h2>
								<p class="hidden-xs">Essa é a segunda imagem do slide.</p>
							</a>
						</div>
					</div>
					<div class="item">
						<img src="fashion/news/images/13.jpg" alt="Terceira Imagem.">
						<div class="carousel-caption main-slide">
							<a href="#">
								<h2>Terceira Imagem.</h2>
								<p class="hidden-xs">Essa é a terceira imagem do slide.</p>
							</a>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#c-slider" role="button" data-slide="prev">
					<span class="chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a class="right carousel-control" href="#c-slider" role="button" data-slide="next">
					<span class="chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Próximo</span>
				</a>
			</div>
		
			<div class="sec-slides">
				<div id="c-slider2" class="carousel slide banner2" data-ride="carousel" data-interval="8000">
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="fashion/news/images/5.jpg" alt="Primeira Imagem.">
							<div class="carousel-caption sec-caption">
								<a href="#">
									<h4>Primeira Imagem.</h4>
									<p>Essa é a primeira imagem do slide.</p>
								</a>
							</div>
						</div>
						<div class="item">
							<img src="fashion/news/images/8.jpg" alt="Segunda Imagem.">
							<div class="carousel-caption sec-caption">
								<a href="#">
									<h4>Primeira Imagem.</h4>
									<p>Essa é a primeira imagem do slide.</p>
								</a>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#c-slider2" role="button" data-slide="prev">
						<span class="chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="right carousel-control" href="#c-slider2" role="button" data-slide="next">
						<span class="chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Próximo</span>
					</a>
				</div>
				<div id="c-slider3" class="carousel slide banner3" data-ride="carousel" data-interval="8000">
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="fashion/news/images/5.jpg" alt="Primeira Imagem.">
							<div class="carousel-caption sec-caption">
								<a href="#">
									<h4>Primeira Imagem.</h4>
									<p>Essa é a primeira imagem do slide.</p>
								</a>
							</div>
						</div>
						<div class="item">
							<img src="fashion/news/images/8.jpg" alt="Segunda Imagem.">
							<div class="carousel-caption sec-caption">
								<a href="#">
									<h4>Primeira Imagem.</h4>
									<p>Essa é a primeira imagem do slide.</p>
								</a>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#c-slider3" role="button" data-slide="prev">
						<span class="chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="right carousel-control" href="#c-slider3" role="button" data-slide="next">
						<span class="chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Próximo</span>
					</a>
				</div>
			</div>
		</div>
		
		<main class="row home-box">
			<aside class="col-md-2 hidden-xs hidden-sm">
				<h5 class="indicator no-margin-top">Em destaque</h5>
				
			</aside>
			
			<article class="col-md-7 row-padding">
				<h3 class="category no-margin-top">MODA</h3>
				<div class="home-content">
					<h3 class="title">
						<a title="" href="#">Desfile de Moda da Estilista Juzia de Almeida</a>
					</h3>
					<figure class="box-img-principal">
						<a title="" href="#">
							<img src="fashion/news/images/pc.jpg" alt="" class="img-responsive" />
						</a>
					</figure>
					<p class="description">
						<a title="" href="#">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias minus dolor excepturi 
							nemo adipisci, explicabo, numquam porro repellat fugiat labore optio quasi voluptatibus 
							quidem officiis dicta eius, aliquid sint illum. Lorem ipsum dolor sit amet, consectetur 
							adipisicing elit. Alias minus dolor excepturi nemo adipisci, explicabo, numquam porro repellat 
							fugiat labore optio quasi voluptatibus quidem officiis dicta eius, aliquid sint illum...
						</a>
					</p>
				</div>
				<hr class="divider hidden-xs hidden-sm" />
				<div class="home-content-secundary hidden-xs hidden-sm">
					<figure class="box-img-secundary">
						<a title="" href="#">
							<img src="fashion/news/images/pc.jpg" alt="" class="img-responsive" />
						</a>
					</figure>
					<h3 class="title-secundary">
						<a title="" href="#">Desfile de Moda da Estilista Juzia de Almeida</a>
					</h3>
					<p class="description-secundary">
						<a title="" href="#">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias minus dolor excepturi 
							nemo adipisci, explicabo, numquam porro repellat fugiat labore optio quasi voluptatibus 
							quidem officiis dicta eius, aliquid sint illum. Lorem ipsum dolor sit amet, consectetur 
							adipisicing elit. Alias minus dolor excepturi nemo adipisci, explicabo, numquam...
						</a>
					</p>
				</div>
				
				<h3 class="category">Beleza</h3>
				<div class="home-content">
					<h3 class="title">
						<a title="" href="#">Desfile de Moda da Estilista Juzia de Almeida</a>
					</h3>
					<figure class="box-img-principal">
						<a title="" href="#">
							<img src="fashion/news/images/pc.jpg" alt="" class="img-responsive" />
						</a>
					</figure>
					<p class="description">
						<a title="" href="#">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias minus dolor excepturi 
							nemo adipisci, explicabo, numquam porro repellat fugiat labore optio quasi voluptatibus 
							quidem officiis dicta eius, aliquid sint illum. Lorem ipsum dolor sit amet, consectetur 
							adipisicing elit. Alias minus dolor excepturi nemo adipisci, explicabo, numquam porro repellat 
							fugiat labore optio quasi voluptatibus quidem officiis dicta eius, aliquid sint illum...
						</a>
					</p>
				</div>
				<hr class="divider hidden-xs hidden-sm" />
				<div class="home-content-secundary hidden-xs hidden-sm">
					<figure class="box-img-secundary">
						<a title="" href="#">
							<img src="fashion/news/images/pc.jpg" alt="" class="img-responsive" />
						</a>
					</figure>
					<h3 class="title-secundary">
						<a title="" href="#">Desfile de Moda da Estilista Juzia de Almeida</a>
					</h3>
					<p class="description-secundary">
						<a title="" href="#">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias minus dolor excepturi 
							nemo adipisci, explicabo, numquam porro repellat fugiat labore optio quasi voluptatibus 
							quidem officiis dicta eius, aliquid sint illum. Lorem ipsum dolor sit amet, consectetur 
							adipisicing elit. Alias minus dolor excepturi nemo adipisci, explicabo, numquam...
						</a>
					</p>
				</div>
				
				<h3 class="category">lifestyle</h3>
				<div class="home-content">
					<h3 class="title">
						<a title="" href="#">Desfile de Moda da Estilista Juzia de Almeida</a>
					</h3>
					<figure class="box-img-principal">
						<a title="" href="#">
							<img src="fashion/news/images/pc.jpg" alt="" class="img-responsive" />
						</a>
					</figure>
					<p class="description">
						<a title="" href="#">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias minus dolor excepturi 
							nemo adipisci, explicabo, numquam porro repellat fugiat labore optio quasi voluptatibus 
							quidem officiis dicta eius, aliquid sint illum. Lorem ipsum dolor sit amet, consectetur 
							adipisicing elit. Alias minus dolor excepturi nemo adipisci, explicabo, numquam porro repellat 
							fugiat labore optio quasi voluptatibus quidem officiis dicta eius, aliquid sint illum...
						</a>
					</p>
				</div>
				<hr class="divider hidden-xs hidden-sm" />
				<div class="home-content-secundary hidden-xs hidden-sm">
					<figure class="box-img-secundary">
						<a title="" href="#">
							<img src="fashion/news/images/pc.jpg" alt="" class="img-responsive" />
						</a>
					</figure>
					<h3 class="title-secundary">
						<a title="" href="#">Desfile de Moda da Estilista Juzia de Almeida</a>
					</h3>
					<p class="description-secundary">
						<a title="" href="#">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias minus dolor excepturi 
							nemo adipisci, explicabo, numquam porro repellat fugiat labore optio quasi voluptatibus 
							quidem officiis dicta eius, aliquid sint illum. Lorem ipsum dolor sit amet, consectetur 
							adipisicing elit. Alias minus dolor excepturi nemo adipisci, explicabo, numquam...
						</a>
					</p>
				</div>
			</article>
			
			<aside class="col-md-3">
				<?php require 'code/master/pub.req.php'; ?>
			</aside>
		</main>
		<?php require 'code/master/footer.req.php'; ?>
	</div>
</body>
</html>