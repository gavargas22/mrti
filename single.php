<?php get_header(); ?>
	
	<div id="main-wrapper">
		<div id="header">
			<div id="mrti-logo"><a href="http://mrti.utep.edu">MRTI Home</a></div>
			<div id="footer-logo-utep"><a href="http://www.utep.edu">UTEP Home</a></div>
			<div id="lab-title"></div>
			<div id="header-images"></div>
			<div id="menu-wrapper">
				<nav id="access" role="navigation">
				<?php wp_nav_menu(); ?>
				</nav><!-- #access -->
			</div>
		</div>
		<div id="slideshow-news">
			<div id="slides">
				<div class="slides_container">
					<div><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/image/slides/slide-1.jpg" alt="Slide 1"></a></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/image/slides/slide-2.jpg" alt="Slide 2"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/image/slides/slide-3.jpg" alt="Slide 3"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/image/slides/slide-4.jpg" alt="Slide 4"></div>
				</div>
			</div>
			<div id="shadow-holder"></div>
		</div>
		<div id="body-page">
			<div id="body-info-wrapper">
				<?php while ( have_posts() ) : the_post(); ?>
				<div id="body-info-title"><?php the_title(); ?></div>
				<div id="body-info-content"><?php the_content('Read the rest of this entry &raquo;'); ?></div>
				<?php endwhile; // end of the loop. ?>
			</div>
			<div id="facebook-like-wrapper"><div class="fb-like-box" data-href="https://www.facebook.com/pages/Materials-Research-and-Technology-Institute/199458250141759" data-width="230" data-height="350" data-show-faces="true" data-border-color="#eee" data-stream="true" data-header="false"></div></div>
		</div>
		<div id="footer">
			<div id="footer-logo"></div>
			<div id="footer-menu"><a href="#">Home</a> | <a href="#">News</a> | <a href="#"> Research</a> | <a href="#">Projects</a> | <a href="#">Faculty</a></div>
			<div id="copyright-notice">Copyright © 2011-2012 The University of Texas at El Paso. Designed and Developed by <a href="mailto:gavargas@slackentie.com">Guillermo Vargas</a> @ SlackenTie Group</div>
		</div>
	</div>
	
<?php get_footer(); ?>