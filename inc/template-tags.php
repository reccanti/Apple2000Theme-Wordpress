<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package gutenberg-starter-theme
 */

if ( ! function_exists( 'gutenberg_starter_theme_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function gutenberg_starter_theme_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'gutenberg-starter-theme' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'gutenberg-starter-theme' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'gutenberg_starter_theme_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function gutenberg_starter_theme_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'gutenberg-starter-theme' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'gutenberg-starter-theme' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			// $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'gutenberg-starter-theme' ) );
			// if ( $tags_list ) {
			// 	/* translators: 1: list of tags. */
			// 	printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'gutenberg-starter-theme' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			// }
			/**
			 * @TODO - Let's figure out how to make our "tag" list. This will
			 * be weird because we're actually going to be combining several different
			 * things. Here is what we'll do
			 * 
			 * 1. Create a general-purpose "create tag" function that will generate
			 *    the HTML for a tag (link, text)
			 * 2. Combine all elements into a single list
			 * 3. Create a switch statement that figures out how to render the tag
			 *    based on its taxonomy (we may need to figure out other ways of
			 *    identifying these)
			 * 
			 * ~reccanti 4/16/2021
			 */

			$tags = get_the_tags();
			$tag_output = '<ul class="TagList">';
			if ( $tags ) {
				foreach($tags as $tag)  {
						$tag_link = get_tag_link( $tag->term_id );
						$tag_output .= '<li class="Tag"><a href="'.$tag_link.'">'.$tag->taxonomy.'</a></li>';
				}
			}
			$tag_output .= '</ul>';
			printf($tag_output);
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'gutenberg-starter-theme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'gutenberg-starter-theme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;
