<section class="ShmancySection">
  <div class="ShmancySection-inner">
    <div class="Comic">
      <?php printf(get_webcomic_media()); ?>
      <nav class="Comic-nav">
        <?php if (!is_first_webcomic())    : print_r(first_webcomic_link());    endif; ?>
        <?php if (!is_previous_webcomic()) : print_r(previous_webcomic_link()); endif; ?>
        <?php if (!is_next_webcomic())     : print_r(next_webcomic_link());     endif; ?>
        <?php if (!is_last_webcomic())     : print_r(last_webcomic_link());     endif; ?>
      </nav>
    </div>
    <hr />
    <h2><?php printf(get_webcomic_collection_title()); ?></h2>
    <h3><?php printf(get_the_title()); ?></h3>
    <?php the_content(); ?>
  </div>
</section>