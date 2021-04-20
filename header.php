<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
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
  <!-- 
    @NOTE We don't want to show the normal site header on the landing page.
    This isn't the most elegant solution, but I can't think of a better way
    of doing it right now. Maybe we can do something with block templates
    or functions.php in the future?

    ~reccanti 4/18/2021
  -->
  <?php if (!is_front_page()) : ?>
    <header id="masthead" class="site-header">
      <a class="site-header-home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </header>
  <?php endif ?>