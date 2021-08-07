<?php
/**
 *
 * @package PJB
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.png"/>

	
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<header id="masthead" class="site-header">
	
<div class="siteheader header zindtop2">
<a href="/shop"><div class="headerlink">Book a Mix</div></a>
<a href="<?php echo home_url(); ?>"><div class="logo">Pedro Joaquim Borges</div></a>
<div class="menugif"></div>
<div class="headerline"></div>
</div>




		<?php if ( has_nav_menu( 'primary' ) ) : ?>
		<?php endif; ?>

	</header><!-- #masthead -->
	<div id="content" class="site-content">
