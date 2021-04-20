<footer id="colophon" class="site-footer">
	<div class="site-info">
    <?php printf( esc_html__( 'Brought to you by: ' )); ?>
    <?php
			printf( esc_html__( '%s', 'gutenberg-starter-theme' ), '<a href="https://github.com/reccanti/Apple2000Theme-Wordpress/">Apple2000Theme-Wordpress</a>' );
		?>
    <?php printf( esc_html__( ' and ' )); ?>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'gutenberg-starter-theme' ) ); ?>"><?php
			printf( esc_html__( '%s', 'gutenberg-starter-theme' ), 'WordPress' );
		?></a>
	</div><!-- .site-info -->
</footer>
</div>

<?php wp_footer(); ?>
  <!-- 
    @TODO Let's find a more reusable way of managing this
    in the future. Maybe a gutenberg block? 
  -->
  <?php if (get_theme_mod( "apple_2000_banner" )) : ?>
    <div class="Banner">
      <span class="Banner-inner">
        <?php print_r(get_theme_mod("apple_2000_banner")); ?>
      </span>
    </div>
  <?php endif; ?>
</body>
</html>
