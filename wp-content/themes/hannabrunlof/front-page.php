<?php get_header(); ?>
<div class="container-fluid">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <!-- <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  	<?php

  	$slideshow = get_field('slideshow');

	if( $slideshow ):

	    foreach ($slideshow as $key => $value) {
	    	echo '<div class="item' . (($key == 0) ? ' active' : '') . '">';
	    	echo '<div class="overlay">';
	    	echo '<a href="' . $value['link'] . '">';
	    	echo '<img src="' . wp_get_attachment_image_src( $value['slideshow-image'], 'full' )[0] . '">';
	    	echo '</a>';
	    	echo '</div>';
	    	echo '</div>';
	    }

	endif;

	?>
  </div>

  <!-- Left and right controls -->
  <a class="left-control" href="#myCarousel" role="button" data-slide="prev">
    <div class="arrow arrow-left" aria-hidden="true"></div>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right-control" href="#myCarousel" role="button" data-slide="next">
    <div class="arrow arrow-right" aria-hidden="true"></div>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<?php get_footer(); ?>
