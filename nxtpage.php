<section id="leadership-area" class="leadership-area">
	<div class="container">
		<div class="body-widget text-center wow fadeInLeft">
			<h2 class="heading-title"><?php the_field('lheading'); ?></h2>
			<h3 class="sub-title"><?php the_field('lsheading'); ?>
			</h3>
			<div class="divider"></div>
		</div>
		<div class="leadership-top">
			<div class="row">
			<?php 
			
			$paged = get_query_var('paged') ? get_query_var('paged') : 1; 
			$post=array('post_type'=>'leadership','posts_per_page'=>2,'paged'=>$paged);

			$allpost = new WP_Query($post);
			$cat=2; $an; 
			if($allpost->have_posts()): while($allpost->have_posts()) : $allpost->the_post();
			if($cat%2==0){
				$an="fadeInLeft";
			}else{
				$an="fadeInRight";
			}
			$cat++;	
			?>
				<div class="col-sm-6 wow <?php echo $an; ?>">
					<div class="leadership-widget">
						<div class="body-widget">
						<?php $url = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>
					<img src="<?php echo $url;?>" class="img-fluid" alt="<?php the_title();?>">
						</div>
						<div class="leader-white">
							<div class="body-widget text-center">
								<h2 class="heading-title2"><?php the_title();?></h2>
								<h3 class="heading-title3"><?php the_field('leader_designation'); ?></h3>
								<p><?php echo substr(get_the_content(),0,50); ?>...</p>
								<div class="read-widget">
									<div class="read-more">
										<a href="<?php the_permalink();?>">Read More 
											<img src="<?php echo get_template_directory_uri();?>/images/green-arrow.png" class="green-arrow" alt="">
											<img src="<?php echo get_template_directory_uri();?>/images/green-arrow-hover.png" class="green-arrow-hover" alt="">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; wp_pagenavi( array( 'query' => $allpost ) ); endif; 

				/*
			echo paginate_links(array(
					 'current' => max( 1, get_query_var('paged') ),
					 'total'=> $allpost->max_num_pages));
				 wp_reset_postdata(); */
					?>
			</div>
		</div>
	</div>
</section>