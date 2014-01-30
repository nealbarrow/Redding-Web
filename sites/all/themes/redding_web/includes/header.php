<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>


<div id="header_outer">
<div id="header" class="clearfix">
<div class="logo">
<a href="http://redding-web.com" title="Redding Web - Quality Web Design made Affordable and Easy">Redding Web - Web Design &amp; Development</a>
</div><!-- end logo -->

<nav class="clearfix">
<?php
	print theme('links__system_main_menu', array(
		'links' => $main_menu,
		'attributes' => array(
		'class' => array('nav clearfix'),
	),
)); ?>
<a href="#" id="pull">Menu</a>
</nav>

</div><!--end header-->
</div><!--end headerOuter-->