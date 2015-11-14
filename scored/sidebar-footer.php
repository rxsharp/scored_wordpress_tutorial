<?php
/**
  * Footer Widgets
  */

if ( ! is_active_sidebar ( 'sidebar-2' ) ) {
  return;
}
?>

<div id="supplementary">
  <div id="footer-wdgets" class="footer-widgets widget-area clear" role="complementary footer widgets">
    <?php dynamic_sidebar( 'sidebar-2'); ?>
  </div>
</div>