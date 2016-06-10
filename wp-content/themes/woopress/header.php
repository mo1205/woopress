<!DOCTYPE html>
<html>
<head>
	<title> <?php bloginfo('name'); ?> </title>
	<?php wp_head(); ?>
</head>
<body>
	<nav class="absolute-navbar">
		<div class="lang-wrapp fl-left">
			<div class="sm-pad button-nav fl-left" id="lang-ina">INA</div>
			<div class="sm-pad button-nav fl-left" id="lang-eng">ENG</div>
		</div>
		<div class="sm-pad info-number fl-right">0</div>
		<div class="md-pad chart-wrapp button-nav fl-right">
			<div class="fl-right">MY CHART</div>
			<div class="chart-icon fl-right">icon</div>
		</div>
		<div class="md-pad button-nav button-login fl-right" id="button-login">LOGIN</div>
	</nav>
	<div class="has-absolute-navbar"></div>
	<nav class="navbar main-menu">
	  <div class="main-menu-wrapp">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand-costum" href="#"><img src="<?php echo home_url() . "/wp-content/themes/woopress/img/logo.png"; ?>" alt=""></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <form class="navbar-form-costum navbar-right" role="search">
	        <div class="">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	      </form>
	      <ul class="nav navbar-nav-costum">
	        <li><a href="#">HOME</a></li>
	        <li><a href="#">ABOUT</a></li>
	        <li><a href="#">FELLAS</a></li>
	        <li><a href="#">GALLERY</a></li>
	        <li><a href="#">SHOP</a></li>
	        <li><a href="#">NEWS</a></li>
	        <li><a href="#">HELPS</a></li>
	        <!-- <li class="dropdown"></li> -->
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<header id="header" class="header">
		<!-- <h1><a href=" -->
		<?php 
			// echo home_url(); 
		?>
		<!-- "> -->
		<?php 
			// bloginfo('name'); 
		?>
		<!-- </a></h1> -->
		<!-- <h2> -->
		<?php 
			// bloginfo('description'); 
		?>
		<!-- </h2> -->
		<!-- <nav class="navbar navbar-default">
			<ul class="nav navbar-nav">
				
			</ul> -->
		    <?php 
		    	$args = array( 
        			"menu_class"=> "nav navbar-nav",
		    		'theme_location' => 'main_menu',
		    		'walker' => new WPDocs_Walker_Nav_Menu());
		    	// wp_nav_menu($args);
		    ?>
		<!-- </nav> -->
		<div class="search-submit">
			<?php 
				// get_search_form(); 
			?>
		</div>
	</header><!-- /header -->
	
	

<?php

class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_lvl( &$output, $depth = 0, $args = array() ) {
    	$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $output .= "\n" . $indent . '<ul class="nav navbar-nav">' . "\n";
    }
}

?>