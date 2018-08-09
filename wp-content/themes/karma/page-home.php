<?php
	/*
		Template Name: Home template
	*/
get_header(); ?>

<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
	  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,fr', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


	<div class="pageCenter">
<?php
	while(have_posts()) {
		the_post();
?>
		<p><?php the_content(); ?></p>
<?php
	}
?>
	</div>

<?php
	include(locate_template('template_part/map.php'));
?>

<?php get_footer(); ?>

