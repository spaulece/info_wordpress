
<!-------In the section in pages where i need this-->
<div id="ct-widget" class="ct-widget">
	<div class="container">
		<div class="body-widget text-center">
			<?php get_template_part( 'template-parts/common', 'ctn' ); ?>
		</div>
	</div>
</div>

<!--In templates parts(common-ctn)-->
<div class="cta-btn">	
	<?php $mar_link = get_field('market_insights_button',9);
		if($mar_link){ $target = $link['target'] ? $link['target'] : '_self';  ?>
		<a href="<?php echo $mar_link['url']; ?>" target="<?php echo $target;?>"><?php echo $mar_link['title']; ?>
		<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
		</a>
	<?php } ?>
</div>