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

</body>
</html>
