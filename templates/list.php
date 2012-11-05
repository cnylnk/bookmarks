<?php 
/**
 * Copyright (c) 2011 Marvin Thomas Rabe <mrabe@marvinrabe.de>
 * Copyright (c) 2011 Arthur Schiwon <blizzz@arthur-schiwon.de>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */
?>
<input type="hidden" id="bookmarkFilterTag" value="<?php echo $_['req_tag']; ?>" />
<div id="controls">
	<form id="add_form">
		<input type="text" id="add_url" value="" placeholder="<?php echo $l->t('Address'); ?>"/>
		<input type="submit" value="<?php echo $l->t('Add bookmark'); ?>" id="bookmark_add_submit" />
	</form>
</div>
<div id="leftcontent">

	<p id="tag_filter">
		<input type="text" placeholder="Filter By tag" value="<?php echo $_['req_tag']; ?>"/>
	</p>

	<label><?php echo $l->t('Related Tags'); ?></label>
	<ul class="tag_list">
	</ul>


<div id="bookmark_settings" class="">
	<ul class="controls">
		<li style="float: right">
			<button id="settingsbtn" title="<?php echo $l->t('Settings'); ?>">
				<img class="svg" src="<?php echo OCP\Util::imagePath('core', 'actions/settings.png'); ?>"
				alt="<?php echo $l->t('Settings'); ?>"   /></button>
		</li>
	</ul>
	<div id="bm_setting_panel">
		<?php require 'settings.php';?>
	</div>
</div>

</div>
<div id="rightcontent" class="rightcontent">
	<div class="bookmarks_list"></div>
	<div id="firstrun" style="display: none;">
		<?php
			echo $l->t('You have no bookmarks');
			$embedded = true;/*
			require_once OC_App::getAppPath('bookmarks') .'/templates/bookmarklet.php' ;
			createBookmarklet(); */
		?>
	<div id="appsettings" class="popup bottomleft hidden"></div>
</div>
<script>
	var fullTags = <?php echo $_['tags'];?>;
</script>

<script type="text/html" id="edit_dialog_tmpl">
<?php require 'addBm.php';?>
</script>
<?php require 'js_tpl.php';?>