<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<?php if(is_page(116)) { ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<?php } else{?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
<?php } ?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fonts.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/mobile-responsive.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/stellarnav.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/set1.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/OverlayScrollbars.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="50">

<!--start mobile view menu-->
<div id="main-nav" class="stellarnav">
	<div class="mobile-logo">
		
			<?php if(in_array(get_the_ID(),array(62,762,764,894,923,933,1035))) { ?>
				    <a href="/funds/oxford-square/">
					 <img src="<?php echo get_option('square_logo_url'); ?>"  alt="Square logo">
					</a>
					<?php } elseif(in_array(get_the_ID(),array(63,767,769,898, 926, 939,1033))) { ?>
						<a href="/funds/oxford-lane/">
						 <img src="<?php echo get_option('lane_logo_url'); ?>"  alt="Lane logo">	
						</a>
					<?php } else { ?>
						<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_option('dlogo_url'); ?>" alt="logo">
					</a>
				<?php } ?>
		
		
	</div>
	<?php if(in_array(get_the_ID(),array(62,762,764,894,923,933,1035))) {
		wp_nav_menu(array('menu_class'=>'scroll-mobile', 'theme_location'=>'social'));
	 } 
	  elseif(in_array(get_the_ID(),array(63,767,769,898, 926, 939,1033))) {
	  	wp_nav_menu(array('menu_class'=>'scroll-mobile', 'theme_location'=>'oxford-lane'));
	  }
	 else {
	 	wp_nav_menu(array('menu_class'=>'scroll-mobile', 'theme_location'=>'primary'));
	 }
          

		?>
</div>
<!--end mobile view menu-->

<!--start desktop menu-->
<div class="nav-new" id="desktop-menu"> 
  <div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="body-widget">
				
					<?php  //if(is_single('62') || is_page('762') || is_page('764')|| is_page('894')) { 
							if(in_array(get_the_ID(),array(62,762,764,894,923,933,1035))) {

						?>
					 <a href="/funds/oxford-square/">
					 <img src="<?php echo get_option('square_logo_url'); ?>" class="logo" alt="Square logo">
					</a>
					<?php } elseif(in_array(get_the_ID(),array(63,767,769,898, 926, 939,1033))) {
					 //(is_single('63') || is_page('767') || is_page('769') || is_page('898')) { ?>
					 	<a href="/funds/oxford-lane/">
						 <img src="<?php echo get_option('lane_logo_url'); ?>" class="logo" alt="Lane logo">	
						</a>
					<?php } else { ?>
					<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_option('dlogo_url'); ?>" class="logo" alt="logo">
					</a>
				<?php } ?>

				
			</div>
		</div>
		<div class="col-sm-8">
			<div class="menu-right">
				<div class="body-widget">
					<?php  
 						if(in_array(get_the_ID(),array(62,762,764,894,923,933))) {
								wp_nav_menu(array('menu_class'=>'menu-new', 'theme_location'=>'social'));
	 							} 
	 				   elseif(in_array(get_the_ID(),array(63,767,769,898, 926, 939))) {
	  						wp_nav_menu(array('menu_class'=>'menu-new', 'theme_location'=>'oxford-lane'));
	 					 }
	 				  else {
	 					wp_nav_menu(array('menu_class'=>'menu-new', 'theme_location'=>'primary'));
						 }
					 ?>
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
<!--end desktop menu-->