<!DOCTYPE html>
<html>	
	<head>
		<title>Portal Salud</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<base href="/psalud/">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/psalud.css" />

		<script type="text/javascript" src="js/jquery-1.10.0.min.js"></script>		
	</head>
	<body>
		<div class="container-fluid" id="rootContainer">
			<div class="row-fluid">
				<div class="span2 lateral">
					<?php include('banners.php') ?>
				</div>
				<div class="span8">
					<div class="container-fluid" id="contents">						
						<?php include('header.php');  ?>
						<?php include('home.php'); ?>
						<?php include('footer.php'); ?>					
					</div>
				</div>
				<div class="span2 lateral">
					<?php include('banners.php'); ?>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/alturas.js"></script>
	</body>	
</html>