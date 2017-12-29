<?php status_header(200); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title>VUE WP THEME</title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="app"></div>
  <?php wp_footer(); ?>
</body>
</html>
