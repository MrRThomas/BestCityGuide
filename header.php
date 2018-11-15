<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	
	<?php wp_head(); ?>
	
</head>
<body>
	<div class="wrap">
		
		<header class="main-header">
			<div class="container">
				<h1 class="name"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
				<?php
				
				    $defaults = array(
				      'container' => false,
				      'theme_location' => 'primary-menu',
				      'menu_class' => 'main-nav'
				    );
				    
				    wp_nav_menu( $defaults );
				
				?>
				
<!--				
				<ul class="main-nav">
					<li><a href="#">ice cream</a></li>
					<li><a href="#">donuts</a></li>
					<li><a href="#">tea</a></li>
					<li><a href="#">coffee</a></li>
				</ul>
-->				
			</div><!-- ends container one -->
			
		</header>
