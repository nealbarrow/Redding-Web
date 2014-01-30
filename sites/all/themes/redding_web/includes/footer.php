<div id="footer_outer">
<div id="footer" class="clearfix">
	
<?php if ($main_menu): ?>
  <ul>
    <?php
    // This code snippet is hard to modify. We recommend turning off the
    // "Main menu" on your sub-theme's settings form, deleting this PHP
    // code block, and, instead, using the "Menu block" module.
    // @see https://drupal.org/project/menu_block
    print theme('links__system_main_menu', array(
      'links' => $main_menu,
      'attributes' => array(
        'class' => array('nav'),
      ),
    )); ?>
  </ul>
<?php endif; ?>

<div class="copy">
&copy; Copyright 2013 Redding Web · All Rights Reserved	
</div><!-- end copy -->

</div><!--end footer-->
</div><!--end footerOuter-->