<?php
/**
 * Template Name: Galleri-sida
 **/
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="col-md-8 col-md-offset-2">
        <div class="gallery-header">
            <h1><?=get_the_title(); ?></h1>
            <?= get_field('ingress'); ?>
        </div>
    </div>
    <div class="col-md-12">
        <?php the_content(); ?>
    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
