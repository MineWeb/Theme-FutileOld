<div id="slider"<?php if($theme_config['accueil']->slider != ""): ?>
style="background: url('<?= $theme_config['accueil']->slider ?>') no-repeat top fixed;"
<?php else: ?>
style="background: url(/theme/Futile/img/banniere.png) no-repeat top fixed;"
<?php endif; ?>>
<div class="title">
	<h6>
		<li class="fa fa-times"></li>
		Maintenance
		<li class="fa fa-times"></li>
	</h6>
</div>
<div class="rond">
	<?= $msg ?>
</div>

</div>