<section class="entry-content ShmancySection">
  <div class="ShmancySection-inner">
    <header class="entry-header">
      <!-- 
        @TODO Add some metadata here later, or just handle
        that in Gutenberg templates later!
        ~reccanti 4/19/2021
      -->
      <?php
        if ( is_singular() ) :
          the_title( '<h1 class="entry-title">', '</h1>' );
        else :
          the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;
      ?>
    </header><!-- .entry-header -->
    <?php
      the_content( sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gutenberg-starter-theme' ),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        get_the_title()
      ) );

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gutenberg-starter-theme' ),
        'after'  => '</div>',
      ) );
    ?>
  </div>
</section><!-- .entry-content -->
