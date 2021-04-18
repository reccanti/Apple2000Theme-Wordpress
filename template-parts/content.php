<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gutenberg-starter-theme
 */

?>
 <?php /* post_class(); */ ?>
<section id="post-<?php the_ID(); ?>">
	<?php 
		if (is_a_webcomic()) {
			/**
			 * @TODO For some reason get_template_part isn't working here. I'm
			 * tired and frustrated and don't know why this doesn't work so this
			 * is what we're doing right now!!! 
			 * 
			 * This searches for the template in `template-parts` named 
			 * `content-comic.php` and then loads it if it finds it 
			 * (that's what the `true` is)
			 * 
			 * ~reccanti 4/18/2021
			 */
			locate_template('template-parts/content-comic.php', true);
			// get_template_part('template-parts/content-comic.php');
		} else {
			get_template_part('content', 'post');
		}
	?>
</section><!-- #post-<?php the_ID(); ?> -->
