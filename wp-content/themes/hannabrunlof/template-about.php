<?php
/**
 * Template Name: Om mig-sida 
 **/
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="col-md-8 col-md-offset-2 col-sm-12">
    	<h1><?php the_title(); ?></h1>
        <div class="col-md-6 col-sm-6 profilepic">
        	<?php $image = get_field('profilbild'); ?>
        	<?= wp_get_attachment_image($image, 'large'); ?>
        </div>
        <div class="col-md-6 col-sm-6">
        	<div class="intro">
        		<?php the_field('text'); ?>
        	</div>
        	<div class="social">
	        	<a href="mailto:<?= the_field('mail'); ?>" class="mail"><i class="fa fa-envelope"></i><?= the_field('mail'); ?></a>
            </div>
            <?php the_field('form'); ?>

        </div>
    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>

