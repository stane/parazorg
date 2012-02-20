<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
	<div id="sidebar">
		<ul>
					<li>
			<div id="twitter_badge_container">
	<div id="twitter_badge_br">
		<div id="twitter_badge_bl">
			<div id="twitter_badge_tl">
				<div id="twitter_badge_tr">
					<div id="twitter_badge_inner">
							
				<ul id="twitter_update_list"><li>loading latest tweet...</li></ul>
		
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
            <span style="margin:10px 0 0 140px;"><a href="http://twitter.com/stane"><img src="http://paraz.org/blog/wp-content/timg/twitter.png" alt="" /></a></span>
            
			</li>
		
		
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>


			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2>Author</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->
			
			<!-- Default theme info disabled
			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <?php the_time('F, Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the year <?php the_time('Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

			<?php } ?>

			</li> <?php }?>
			-->
			

			


			<?php wp_list_pages('title_li=<h2>Navigation</h2>' ); ?>
			
						<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>

				
			<?php } ?>

			<?php endif; ?>
			
			


			<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>
			
			<li><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>	
			
			<li>
				<?php get_search_form(); ?>
			</li>	
			
			            <script type="text/javascript" src="http://paraz.org/blog/t.js"></script> 
<script type="text/javascript" src="http://paraz.org/blog/t.php"></script>

                        <li>
<div id="rss"><a href="http://feeds.feedburner.com/midstane" title="subscribe to rss"></a></div>
                        </li>	



		


		</ul>
	</div>

