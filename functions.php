<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'left-footer-menu' => __('Left Footer Menu'),
      'right-footer-menu' => __('Right Footer Menu'),
      'ghosh-menu' => __('Dr. Ghosh Page Menu'),
    )
  );
}
add_action('init', 'register_my_menus');

?>
