


<!-- 'Post objcet' field to fetch a page as a post within a page. -->

<section id="what-offer" class="what-offer">
	<div class="container">
		<div class="row">
		<?php $services_object = get_field('add_services_page'); if( $services_object ){ 
			foreach( $services_object as $post){
	          setup_postdata( $post ); ?> 
			<div class="col-sm-4 wow fadeInLeft">
				<div class="services-main">
					<div class="services-widget">
					<?php  $url = get_field('upload_icon'); if($url){?>
						<img src="<?php echo $url['url'];?>" class="icon-offer" alt="<?php echo $url['alt'];?>">
					<?php } ?>
						<h2 class="heading-title2"><?php the_title();?></h2>
						 <p><?php echo substr(get_the_content(),0,60);?>...</p>
					  <div class="services-overlay">
						<div class="green-widget">
							<div class="green-main">
								<div class="services-text">
									<h2 class="heading-title2"><?php the_title();?></h2>
									 <p><?php echo substr(get_the_content(),0,60);?>...</p>
									<div class="read-widget">
										<div class="read-more">
											<a href="<?php the_permalink();?>">Learn More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					  </div>
					</div>
				</div>
			</div>
		<?php } }  wp_reset_postdata();?>
		</div>
	</div>
</section>