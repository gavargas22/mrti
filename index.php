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
			<div id="storyboard">
				<div id= "storyboard-title">Recent Stories</div>
				<div id="storyboard-stories">
					<?php query_posts( 'cat=3' ); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="storyboard-story" id="storyboard-story-<?php the_ID(); ?>">
						<div class="story-title" id="story-title-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
						<div class="story-date" id="story-date-<?php the_ID(); ?>"><?php the_time('F jS, Y') ?></div>
					</div>
					<?php endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div id="body-page">
			<div id="body-info-wrapper">
				<?php query_posts( 'cat=4' ); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div id="body-info-title"><?php the_title(); ?></div>
				<div id="body-info-content"><?php the_content(); ?></div>
				<?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
			</div>
			<div id="facebook-like-wrapper"><div class="fb-like-box" data-href="https://www.facebook.com/pages/Materials-Research-and-Technology-Institute/199458250141759" data-width="230" data-height="350" data-show-faces="true" data-border-color="#eee" data-stream="true" data-header="false"></div></div>
		</div>
		<div id="footer">
			<div id="footer-logo"></div>
			<div id="footer-menu"><a href="#">Home</a> | <a href="#">News</a> | <a href="#"> Research</a> | <a href="#">Projects</a> | <a href="#">Faculty</a><?php wp_loginout(); ?></div>
			<div id="copyright-notice">Copyright © 2011-2012 The University of Texas at El Paso. Designed and Developed by <a href="mailto:gavargas@slackentie.com">Guillermo Vargas</a> @ SlackenTie Group</div>
		</div>
	</div>
	
<?php get_footer(); ?>