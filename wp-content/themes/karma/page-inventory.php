<?php
	/*
		Template Name: Inventory template
	*/
get_header(); ?>


<div class="inventoryPageMain">
	<h2><?php the_title(); ?></h2>
	<hr>

<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
	  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,fr', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


	<div class="main_container">
		<div class="sidebar">
			<?php if (function_exists('dynamic_sidebar')) {dynamic_sidebar('side_panel');} ?>
		</div>

		<div class="carlist">
			<?php while(have_posts()) {the_post(); ?>
			<p><?php the_content(); ?></p>
			
			<?php } if (function_exists('dynamic_sidebar')) {dynamic_sidebar("main_panel");} ?>
		</div> <!--  -->
	</div>
</div>


<?php get_footer(); ?>

