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
	<title></title>
	<link rel="icon" type="image/png" href="../../code/images/logo/favicon.png" />
	<link rel="stylesheet" type="text/css" href="../../code/styles/bootstrap/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="../../code/styles/atraccoes/app.css" />
	<link rel="stylesheet" type="text/css" href="../../code/styles/atraccoes/icons.css" />
	<link rel="stylesheet" type="text/css" href="../../code/styles/atraccoes/responsive.css" />
	<script type="text/javascript" src="../../code/scripts/jquery/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../../code/scripts/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../code/scripts/atraccoes/app.js"></script>
</head>
<body>
	<div class="container">
		<?php require '../../code/master/header.req.php'; ?>
		<script type="text/javascript">
			document.getElementById("fashion").className="active";
			document.getElementById("fashion").href="/Atraccoes/fashion";
    	</script>
		<main class="row home-box">
			<article class="col-md-9">					
				<div class="home-content-secundary post">
					<h2 class="post-title">
						Desfile de Moda da Estilista Juzia de Almeida
					</h2>
					<div class="post-info">
						<span class="user">&nbsp;<em>Postado&nbsp;por&nbsp;<b>Augusto Manuel</b></em></span>
						<span class="calendar">&nbsp;<em>Quarta-feira 10 de Julho de 2015</em></span>
					</div>
					<figure class="box-img-post">
						<a href="images/pc.jpg">
							<img src="images/pc.jpg" alt="" class="img-responsive" />
						</a>
					</figure>
					<p class="post-description">
						<a title="" href="#">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias minus dolor excepturi 
							nemo adipisci, explicabo, numquam porro repellat fugiat labore optio quasi voluptatibus 
							quidem officiis dicta eius, aliquid sint illum. Lorem ipsum dolor sit amet, consectetur 
							adipisicing elit. Alias minus dolor excepturi nemo adipisci, explicabo, numquam...
						</a>
					</p>
					<div class="share">
						<ul>
							<li>
								<a href="#" class="facebook" data-toggle="tooltip" data-placement="bottom" title="Partilha no Facebook"></a>
							</li>
							<li>
								<a href="#" class="twitter" data-toggle="tooltip" data-placement="bottom" title="Partilha no Twitter"></a>
							</li>
							<li>
								<a href="#" class="google-plus" data-toggle="tooltip" data-placement="bottom" title="Partilha no Google+"></a>
							</li>
							<li>
								<a href="#" class="instagram" data-toggle="tooltip" data-placement="bottom" title="Partilha no Instagram"></a>
							</li>
						</ul>
					</div>
					<section class="comments">
						<h4>Comentários</h4>
						<div class="all-comments">
							
						</div>
						
						<form action="" id="" method="">
							<input type="text" placeholder="Seu nome" />
							<textarea type="email" rows="7" cols="40" placeholder="Seu comentário"></textarea>
							<button type="submit" class="btn btn-default">
								<span class="comment">&nbsp;Comentar</span>
							</button>
						</form>
					</section>
				</div>
			</article>	
				
			<aside class="col-md-3">
				<?php require '../../code/master/pub.req.php'; ?>
			</aside>
		</main>
		<?php require '../../code/master/footer.req.php'; ?>
	</div>
</body>
</html>