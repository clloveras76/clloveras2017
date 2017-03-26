<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
	<!-- link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" -->
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url')?>/css/fonts.css"/>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url')?>/css/font-awesome.min.css"/>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url')?>/css/styleparallax.css"/>	
	<!-- link rel="stylesheet" type="text/css" href="css/styles.css" -->
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>"/>

	
	<title>Clloveras</title>
	<?php wp_head(); ?>
</head>
<body>
<!-- abre mainContainerHome  -->	
<div id="topSite" class="container-fluid mainContainerHome">
	<!-- Encabezado -->
	<div class="row">
		<div class="col-md-12">
			<header>
			<nav class=	"navbar navbar-default navbar-fixed-top topNavigationBar">
			  <div class="container">
			  	<div class="navbar-header">
			  		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
			  			<span class="sr-only">Menu</span>			  			
			  			<span class="icon-bar"></span>			  			
			  			<span class="icon-bar"></span>			  			
			  			<span class="icon-bar"></span>			  			
			  		</button>
			  		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand">    
			  			<span class="ColorGreenBlue">&#60; </span><span class="colorBLueDark">Carlos Lloveras</span> <span class="ColorGreenBlue">/&#62;</span>
			  		</a>
			  		<span class="description-site"><?php bloginfo( 'description' ); ?></span>
			  	</div>
			  	<div class="collapse navbar-collapse" id="navbar-1">

				
				<?php wp_nav_menu(
						array(
							'container' => false,
							'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
							'theme_location' => 'menu',		
						));?>

			  	</div>
			  </div>
			</nav>
			</header>

		</div>
	</div>
	<!-- Cierra Encabezado -->


