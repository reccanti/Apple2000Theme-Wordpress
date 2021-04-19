<section class="ShmancySection">
  <div class="ShmancySection-inner">
    <div class="Comic">
      <?php printf(get_webcomic_media()); ?>
      <nav class="Comic-nav">
        <button><<</button>
        <button><</button>
        <button>></button>
        <button>>></button>
      </nav>
    </div>
    <hr />
    <h2><?php printf(get_webcomic_collection_title() . " | " . get_the_title()); ?></h2>
  </div>
</section>