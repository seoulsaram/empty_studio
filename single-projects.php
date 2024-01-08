<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Empty_Studio
 */

get_header();
wp_reset_postdata();
?>
<div class="entry-content">
	<?php
	$uri = array_values(array_filter(explode("/", $_SERVER["REQUEST_URI"])));
	$post_type = $uri[0];
	$slug = $uri[1];

	$arg = array(
		'post_type' => $uri,
		'name' => $slug,
	);
	$query = new WP_Query($arg);

	if ($query) {
		while ($query->have_posts()) {
			$query->the_post();
			get_template_part('template-parts/content-projects', get_post_type());
		}
	}
	?>
</div>

<?php
get_footer();
