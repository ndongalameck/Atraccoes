<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="Vawel" />
	<title>Atracções - Painel Inicial</title>
	<link rel="icon" type="image/png" href="../code/images/logo/favicon.png" />
	<link rel="stylesheet" type="text/css" href="../code/styles/bootstrap/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="../code/styles/atraccoes/app.css" />
	<link rel="stylesheet" type="text/css" href="../code/styles/atraccoes/icons.css" />
	<link rel="stylesheet" type="text/css" href="../code/styles/atraccoes/responsive.css" />
	<script type="text/javascript" src="../code/scripts/jquery/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../code/scripts/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="../code/scripts/atraccoes/app.js"></script>
	<style type="text/css">
		.copy{padding: 12px 20px!important;}
		.copy div{font-size: 1.02em!important;}
	</style>
</head>
<body>
	<div class="container">
		<?php require 'master/header.req.php'; ?>
		<!--<aside class="navbar-default mnu-admin" role="navigation" style="width: 300px;min-height: 570px;">-->
			<?php require 'master/menu.req.php'; ?>
		<!--</aside>-->
		<script type="text/javascript">
			document.getElementById("dashboard").className="active";
		</script>
		<main class="main-content">
			<article class="row-padding" style="padding: 0 30px!important;">
				<h3 class="category" style="margin-top: 15px!important;">Painel Inicial</h3>
				<div class="home-content">
					
				</div>
			</article>
		</main>
		<?php require 'master/footer.req.php'; ?>
	</div>
</body>
</html>