<?php 

/*
Template Name: Projekt 
*/

?>

<?php get_header(); ?>
	
	<div class="fluid-container">
	<?php
		$pages = get_posts(array(
			'post_type' => 'page',
			'posts_per_page' => -1,
			'meta_key' => '_wp_page_template',
			'meta_value' => 'template-gallery.php'
		));

		echo '<div class="row">';

		foreach ($pages as $key => $page) :
			if ($page->ID != get_the_id()) :
	?>	
				<div class="col-md-4 col-sm-6 col-xs-12 gallery">
					<a href="<?=get_permalink($page->ID)?>">
						<div class="image-wrapper">
						<?= wp_get_attachment_image( get_post_thumbnail_id($page->ID), 'start-page-size' ); ?>
							<div class="title-wrapper">
								<h2><?=$page->post_title?></h2>
							</div>
						</div>
					</a>
				</div>
	<?php			
			endif;
		endforeach;

		echo '</div>';

	?>

	</div>

<?php get_footer(); ?>