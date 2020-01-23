<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Test</title>
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">  
    <!-- Bootstrap -->
    
    <link href="<?php echo bloginfo('template_url');?>/fonts/fonts.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url');?>/css/animate.css" rel="stylesheet">      
    <link href="<?php echo bloginfo('template_url');?>/css/style.css" rel="stylesheet">
    
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" rel="stylesheet">
   <style>
.checked {
  color: orange;
}
.blank{color:white;}
.bg{background-color:black;}
</style>
   

  </head>
  <body class="bg">
      <div class="page-wrapper">
      
      	<!----------------- Start HEADER ------------------------->
      
  		<header id="header-section">
                 
                  <div class="middle-head bg">
                     <div class="container">
                          <div class="row">
                            
                              <div class="col-sm-4 col-xs-12">
                              	<div class="top-socail">
                              		<ul>
                              			<li> <img src="<?php echo bloginfo('template_url');?>/images/phone.png"> <a href="tel:+00 11 222 333 444">+00 11 222 333 444</a></li>
                              			<li><img src="<?php echo bloginfo('template_url');?>/images/email.png"> <a href="rog.com">rog.com</a> </li>
                              		</ul>
                              	</div>
							  </div>	
                             
                              <div class="col-sm-3 col-xs-12">
                                  <div class="top-logo">                      
                                      
                                            <?php 
                     query_posts(array('post_type'=>'logo'));
               
                    while(have_posts()):the_post();      
                    $image=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()));
                ?>
                    <img src="<?php echo $image[0];?>">
                <?php endwhile;
                    wp_reset_query();
                ?>
                                  </div>
                                  
                                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>  
                              </div>
                              <div class="col-sm-5 col-xs-12">
                                  <div class="contact-link">
                                      <ul>
                                          <li>  <a href="#"><i class="fa fa-facebook"></i></a></li>	
                                          <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                          <li>  <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          
                                      </ul>
                                      
                                      <p>Open hours: 8.00-18.00 Mon-Fri</p>
                                  </div>
                              </div>                     
                          </div>
                      </div>
                  </div>
                  <div class="bottom-head bg">
                      <div class="container">
                          <div class="row">                          

                               <nav class="navbar">

                                                               

                                    <div class="collapse navbar-collapse" id="myNavbar">
                                     <?php
                                        wp_nav_menu(
                                            array(
                                                'menu_class' => 'nav navbar-nav',
                                                'theme_location'  => 'primary',
                                                'container' => 'ul',
                                            )
                                        );
                                        ?>                              
                                    </div>

                                </nav> 

                          </div>
                  </div>
                  </div>
          </header> 
          
          
        	<!----------------- end HEADER ------------------------->  
        	
        	
        		<!----------------- Start Banner ------------------------->
          
        <section id="banner-section">
              <div id="mainCarousel" class="carousel slide" data-ride="carousel">

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                <?php 
                     query_posts(array('post_type'=>'banner'));
               
                    while(have_posts()):the_post();      
                    $image=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'');
                ?>
                    <img src="<?php echo $image[0];?>">
                <?php endwhile;
                    wp_reset_query();
                ?>


                  <div class="carousel-caption wow fadeInUp">
                <?php
                query_posts(array('post_type'=>'banner'));
               
                while(have_posts()):the_post();      
                
                ?>
               
                    <h3><?php the_title();?></h3>
                    <h4><?php the_content();?></h4>

                <?php endwhile;
                wp_reset_query();
                ?>
                  
                  </div>
                </div>
                
              </div>

              
            </div>
          </section>  
          
          
          	<!----------------- End banner ------------------------->
          	
          	
          		<!----------------- Start About ------------------------->
          
          
        <section id="about">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="about wow fadeInUp">
        				<?php while (have_posts()):the_post();?>
                           <h2><?php echo get_the_title(); ?></h2>
                           
                        <?php endwhile;
                        wp_reset_query();
                        ?>
        					
        				
        				</div>
        			</div>
        		</div>
        	</div>
        </section>  
        
        
        	<!----------------- End About ------------------------->
        	
        	
        		<!----------------- Start Desktop Version Service ------------------------->
        
        
        <section id="service" class="hidden-sm hidden-xs">
        	<div class="container-fluid">
        	
        		<?php
           
                query_posts(array('post_type'=>'single_page'));
              
                while(have_posts()):the_post();
                    $image=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'');
              
                ?>
        		<div class="row wow fadeInUp">

                    <div class="col-sm-6">
                        

                            <h1><?php the_title();?></h1>
                            
                            <p><?php the_content();?></p>
                          </div>
                       


                          <div class="col-sm-6 cover_image">
                        <img src="<?php echo $image[0];?>">
                    </div>
                        
                <div class="row">
                  <div class="col-md-12">
                    <p><?php the_content();?></p>
                  </div>
                </div>


                  </div>
                  </div>
                  
                </div>

                <?php endwhile;
                wp_reset_query();
                ?>
        		
        	</div>
        </section>
        
        
        	<!----------------- End Desktop Version Service ------------------------->
        	
        	
        <!----------------- Start testimonails ------------------------->
        <section id="testimonails" class="wow fadeInUp">
        
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
        <div class="testimonial4_header">
            <h4><?php the_field('htsection_title');?></h4>
        </div>
        
        <ol class="carousel-indicators">
            <li data-target="#testimonial4" data-slide-to="0" class="active"></li>
            <li data-target="#testimonial4" data-slide-to="1"></li>
            <li data-target="#testimonial4" data-slide-to="2"></li>
        </ol>
        
        <div class="carousel-inner" role="listbox">

            <?php if(have_rows('testimonial_repeat_field')) : while(have_rows('testimonial_repeat_field')): the_row();?>
            <div class="item <?php if($i==1){ echo 'active';}?>">
                <div class="testimonial4_slide">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="test-img">
                              <?php $timg=get_sub_field('image'); if($timg) {?>
                                <img src="<?php echo  $timg['url']; ?>" class="img-circle img-responsive" alt="<?php echo  $timg['alt']; ?>" />
                             <?php  }?>
                            </div>
                        </div>
                        
                        <div class="col-sm-10">
                            <div class="test-content">
                              <?php if(get_sub_field('remarks')){?>
                                <h6><?php the_sub_field('remarks');?></h6>
                              <?php }?>
                                  <?php $str=get_sub_field('star_rating');?>
                                  <?php
                                     for($i=1;$i<=$str[0];$i++)
                                     {
                                     ?>
                                    <span class="fa fa-star checked"></span>
                                     <?php
                                      }
                                     ?>
                                       <?php
                                     for($i=1;$i<=5-$str[0];$i++)
                                     {
                                     ?>
                                    <span class="fa fa-star blank"></span>

                                     <?php
                                      }
                                     ?>
                                <?php if(get_sub_field('content')){?>
                                <p><?php the_sub_field('content');?></p>
                              <?php }?>
                                <h4><?php if(get_sub_field('name')){?>
                                  <?php the_sub_field('name');?>
                                <?php }?>
                                </h4>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                    
                </div>
            </div>

            <?php endwhile; endif;?>

            
        </div>
        <a class="left carousel-control" href="#testimonial4" role="button" data-slide="prev">
            <span class="fa fa-arrow-circle-o-left"></span>
        </a>
        <a class="right carousel-control" href="#testimonial4" role="button" data-slide="next">
            <span class="fa fa-arrow-circle-o-right"></span>
        </a>
    </div>
        </section>
        
        <!----------------- End testimonails ------------------------->
        
        
        
        <!----------------- End footer ------------------------->
    
       <footer>
            <div class="top_footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="widgets wow fadeInUp">

                                <?php dynamic_sidebar('sahil');?>
                                
                                </div>
                            </div>
                       
                        <div class="col-md-4">
                            <div class="widgets wow fadeInUp">
                               <?php dynamic_sidebar('s1');?>
                            </div>
                        </div>
                
                        <div class="col-md-4">
                            <div class="widgets wow fadeInUp">
                               <?php dynamic_sidebar('s2');?>
                           </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        </div>
                
             
            
            <div class="bottom_footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="copyright">
                                <p>
                                <?php dynamic_sidebar('copy');?>
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="owncompany"><p>Conceptualized &amp; developed by <a href="" target="_blank"><img src="<?php echo bloginfo('template_url');?>/images/12.png"></a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!----------------- End Footer ------------------------->
     
      </div> 
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo bloginfo('template_url');?>/js/bootstrap.min.js"></script>
    <script src="<?php echo bloginfo('template_url');?>/js/wow.js"></script>     
  
   <script>
	new WOW().init();
   </script>

      
 </body>
</html>