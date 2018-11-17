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

 $logo     = get_field('logo');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta charset="UTF-8">
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

<body <?php body_class(); ?> >

   <div id="myProgress">
         <div id="myBar"></div>
      </div>

  <main>
	
	<header><!-- header -->

			


		<div class="nav-wrapper row end-lg  between-xs middle-lg middle-md middle-sm middle-xs">
					
					<img src="<?php echo $logo['url']; ?>" alt="" class="logo-main">

					<?php 
					wp_nav_menu( array(

						'theme_location'        => 'menu-1',
						'container'             => 'div',
						'container_class'       => 'nav',
						'menu_class'            => 'nav-link-wrapper',
						

					) )
					?>

			   <!-- <div class="nav">
              <ul class="nav-link-wrapper">
              <li><a class="nav-link-lang" style="color: red" href="#">English &nbsp;&nbsp;</a></li> <li><a class="nav-link-lang" href="./index-cn.html">中文</a></li>
              </ul>
        </div> -->
						
		</div><!-- nav-wrapper -->
</header><!-- Header -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/header.js"></script>
