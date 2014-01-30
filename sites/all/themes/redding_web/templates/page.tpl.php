<?php include_once ($directory."/includes/header.php"); ?>

<?php if ($tabs = render($tabs)): ?>
<div id="tabs_outer"><div id="tabs" class="clearfix"><?php print $tabs; ?></div></div>
<?php endif; ?>

<div id="sec_content_outer">
<div id="sec_content">
	
<h1><?php print $title; ?></h1>

<?php print render($page['content']); ?>

</div><!--end sec_content-->
</div><!--end sec_content_outer-->



<?php include_once ($directory."/includes/footer.php"); ?>