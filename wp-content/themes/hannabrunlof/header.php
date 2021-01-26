<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89140985-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body <?php body_class(); ?>>
<header id="header" role="banner">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
		  <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
	    </div>
	    <div class="collapse navbar-collapse" id="navbar-menu">
			<?php $menu = wp_get_nav_menu_items('Meny'); ?>
			<?php $projects = wp_get_nav_menu_items('Projekt'); ?>
			<ul class="nav navbar-nav navbar-right">
				<?php
				if ($projects) {
					 foreach ($projects as $key => $project) {
					 	if($key == 0) {
					 		echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' . $project->title . '<span class="caret"></span></a>';
					 		echo '<ul class="dropdown-menu">';
					 	} else {
					 		echo '<li><a href="' . $value->url . '">' . $project->title . '</a></li>';
					 	}
					 }
					 echo '</ul></li>';
				}

				foreach ($menu as $value) {
				 	if($value->menu_item_parent == 0) {
				 		echo '<li><a href="' . $value->url . '">' . $value->title . '</a></li>';
				 	}
				}
				?>
				<li><a href="https://www.instagram.com/hbrunlofwindell/" class="fa fa-instagram" target="_blank"></a></li>
				<li><a href="https://www.facebook.com/hanna.brunlof?fref=ts" class="fa fa-facebook-square" target="_blank"></a></li>
			</ul>
	  	</div>
	  </div>
	</nav>
	<!-- <section id="branding">
<div id="site-description"><?php //bloginfo( 'description' ); ?></div>
</section> -->
	<!-- <div id="search">
<?php //get_search_form(); ?>
</div> -->
</header>

<div id="container">
