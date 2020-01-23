<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<footer id="footer-new" class="footer-new" style="background:url('<?php bloginfo('template_url'); ?>/images/320734763.jpg') no-repeat center;background-size:cover;">
	<div class="footer-overlay">
		<div class="container">
			<div class="footer-widget">
				<div class="row">
					<div class="col-sm-6 wow fadeInLeft">
						<div class="body-widget">
							<?php if(in_array(get_the_ID(),array(62,762,764,894,923,933,1035))) { ?>
								<a href="/funds/oxford-square/">
	                            <img src="<?php echo get_option('square_logo_url') ?>" class="footer-logo" alt="Squre logo">
	                             </a>
								<p><strong><?php echo get_option('square_title') ?></strong></p>
							<?php } elseif(in_array(get_the_ID(),array(63,767,769,898, 926, 939,1033))) { ?>
								<a href="/funds/oxford-lane/">
	                            <img src="<?php echo get_option('lane_logo_url') ?>" class="footer-logo" alt="Lane logo">
	                             </a>
								<p><strong><?php echo get_option('lane_title') ?></strong></p>
							<?php } else {  ?>
								<a href="<?php echo home_url(); ?>">
	                            <img src="<?php echo get_option('dlogo_url') ?>" class="footer-logo" alt="logo">
	                             </a>
								<p><strong><?php echo get_option('compnay_name') ?></strong></p>
						    <?php }  ?>
							<p>
								<?php echo get_option('office_address') ?>
							</p>
							<div class="copyright-widget">
								<p>
									© Copyright <?php echo date('Y'); ?><?php echo get_option('copy_right') ?>
								</p>
								 <?php if(in_array(get_the_ID(),array(62,762,764,894,923,933,1035))) 
								         { wp_nav_menu(array('theme_location'=>'square-privacy'));  }  
								      elseif(in_array(get_the_ID(),array(63,767,769,898, 926, 939,1033))) 
								      	  { wp_nav_menu(array('theme_location'=>'lane-privacy'));  }
								      else { wp_nav_menu(array('theme_location'=>'footer')); } ?>
									  
									  <?php if(is_singular('funds')) { ?>
									  <a class="alink" style="color:#fff; /*border: 1px solid;*/ padding: 8px 8px 0 8px; margin-left: -8px;" href="/">www.oxfordfunds.com</a>
									  <?php } ?>
									  
									  
									   <?php if(is_page(1033) || is_page(1035)) { ?>
									  <a class="alink" style="color:#fff; /*border: 1px solid;*/ padding: 8px 8px 0 8px; margin-left: -8px;" href="/">www.oxfordfunds.com</a>
									  <?php } ?>
									  
							</div>
						</div>
					</div>
					<div class="col-sm-6 wow fadeInRight">
						<div class="contact-right">
							<div class="address-repeat">
								<div class="address-link" style="display:none;">
									<?php if(get_option('phone_1')) { ?>
									<a href="tel:<?php echo str_replace(str_split('() -'), "", get_option('phone_1'))  ?>"><span>P</span><?php echo get_option('phone_1') ?></a>
								   <?php } ?>
								   <?php if(get_option('phone_2')) { ?>
									<a href="tel:<?php echo str_replace(str_split('() -'), "", get_option('phone_2'))  ?>"><span>P</span><?php echo get_option('phone_2') ?></a>
									<?php } ?>
									<?php if(get_option('email')) { ?>
									<a href="mailto:<?php echo get_option('email') ?>"><span>E</span><?php echo get_option('email') ?></a>
									<?php } ?>
								</div>
								
								<div class="footer-address-new">
									<div class="footer-address">
										<?php if(get_option('phone_1')) { ?>
									<a href="tel:<?php echo str_replace(str_split('() -'), "", get_option('phone_1'))  ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/p-img.png" class="circle-img" alt=""><?php echo get_option('phone_1') ?>
									</a>
								   <?php } ?>
								   <?php if(get_option('phone_2')) { ?>
									<a href="tel:<?php echo str_replace(str_split('() -'), "", get_option('phone_2'))  ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/p-img.png" class="circle-img" alt=""><?php echo get_option('phone_2') ?></a>
									<?php } ?>
									<?php if(get_option('email')) { ?>
									<a href="mailto:<?php echo get_option('email') ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/e-img.png" class="circle-img" alt=""><?php echo get_option('email') ?></a>
									<?php } ?>
									</div>
								</div>
								
							</div>
							<div class="body-widget">
									<?php  
				 						if(in_array(get_the_ID(),array(62,762,764,894,923,933))) {
												wp_nav_menu(array('theme_location'=>'social','depth'=>1));
					 							} 
					 				    elseif(in_array(get_the_ID(),array(63,767,769,898, 926, 939))) {
					  						 wp_nav_menu(array('theme_location'=>'oxford-lane','depth'=>1));
					 					    }
					 				    else {
					 					       wp_nav_menu(array( 'theme_location'=>'footer-nav'));
										    }
									 ?>
								
							</div>
							<?php  global $post;  if( $post->ID == 921) { ?>
							<div class="bottom-link">
								<ul>
									<li>
										<a href="/funds/oxford-square">Oxford Square</a>
									</li>
									<li>
										<a href="/funds/oxford-lane/">Oxford Lane</a>
									</li>
								</ul>
							</div>
						<?php } ?>
						
							<div class="alta-widget">
								<p>
									Designed & Developed By <a href="https://www.altastreet.com/" target="_blank">Altastreet</a>.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>		
			<?php if(get_option('fdisclaimer')) { ?>	
			<div class="disclaimer wow fadeInLeft" style="display:none">
				<h2><?php echo get_option('disclaimer_title') ?></h2>
				<p><?php echo get_option('fdisclaimer') ?></p>
			</div>
		   <?php } ?>
		</div>
	</div>
</footer>

<div id='toTop'>
	<a href="javascript:void(0);">
		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</a>
</div>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/stellarnav.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.matchHeight-min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jarallax.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/wow.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/navbar-fixed.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.overlayScrollbars.js"></script>
<?php wp_footer(); ?>

<script>
var j = jQuery.noConflict();
j('.box').overlayScrollbars({className       : "os-theme-round-dark",resize          : "both",
	sizeAutoCapable : true,
	paddingAbsolute : true}); 
</script>


</body>
</html>