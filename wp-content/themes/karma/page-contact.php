<?php
	/*
		Template Name: Contact template
	*/
get_header(); ?>

<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
	  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,fr', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



	<div class="contactPageMain pageCenter">
<?php
	while(have_posts()) {
		the_post();
?>
		<h2><?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>
<?php
	}
?>
	</div>

<?php if (isset($_GET['stocknum'])) { ?>
	<script>


		document.getElementById('messagebox').textContent = "I'm interested in Stock # <?php print($_GET['stocknum']); ?>";
	</script>
<?php } ?>

<?php if (isset($_GET['testdrive'])) { ?>
	<script>
		document.getElementById('messagebox').textContent = "I’m interested in scheduling a test drive.";
	</script>
<?php } ?>

<?php
	include(locate_template('template_part/map.php'));
?>

<?php
	get_footer();
?>

