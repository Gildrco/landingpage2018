<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gildr
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700i" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/flexboxgrid.css">

	<?php wp_head(); ?>

	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body <?php body_class(); ?>>



  <main>
	
		<header><!-- header -->
			<img src="<?php bloginfo('stylesheet_directory')?>/assets/gildr-logo.png" alt="" class="logo-main">
			
			<div class="nav-wrapper row end-lg end-md center-sm center-xs middle-lg middle-md">
			
							<nav class="nav col-lg-4 col-md-4">
								<div class="nav-link-wrapper">
									<a class="nav-link-lang" href="#">English &nbsp;&nbsp;/</a><a class="nav-link-lang" href="#">中文</a>
								</div>
				
								<div class="nav-link-wrapper">
									<a class="nav-link-cta" href="#">Main</a><a class="nav-link-cta" href="#">Join</a>
								</div>
						</nav>		
			</div><!-- nav-wrapper -->
			
		</header><!-- Header -->
