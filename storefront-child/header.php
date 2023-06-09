<?php


?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body>

	<?php wp_body_open(); ?>

	<?php do_action('storefront_before_site'); ?>


	<header id="hlava">
		<div class="container">
			<div class="row">
				<section class="col-md-12 col-sm-12 d-flex">
					<div class="col-md-3 col-sm-3 logo d-flex">
						<div><a href="<?php echo get_permalink( get_page_by_path( 'front-page' ))?>"><img src="http://stelzer-jakub.eu/wp-content/uploads/2023/04/black.png" height="60px" width="120px" alt=""> </a></div>
					</div>
					<div class="col-md-2 col-sm-1 empty">
					</div>
					<div class="col-md-6 col-sm-8 nav-right links d-flex">

						<div class="col-md d-flex link_top"><a href="stelzer-jakub.eu/#video-clip">VIDEOCLIP</a></div>
						<div class="col-md d-flex link_top"><a href="stelzer-jakub.eu/#about">ABOUT </a></div>
						<div class="col-md d-flex link_top"><a href="stelzer-jakub.eu/#about-artists">ARTISTS</a></div>
						<div class="col-md d-flex link_top"><a href="<?php echo get_permalink( get_page_by_path( 'shop' ))?>">SHOP</a></div>
						<div class="col-md d-flex link_top"><a href="<?php echo get_permalink( get_page_by_path( 'cart' ))?>">CART</a></div>
					</div>

				</section>
			</div>
		</div>
	</header>