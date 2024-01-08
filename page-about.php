<?php
/* Template Name: About */
get_header();
?>

<main id="primary" class="site-main">
	<div class="about">
		<?php
		$args = array(
			'post_type' => 'about',
			'post_status' => 'publish',
			'posts_per_page' => 100,
			'order' => 'asc',
		);
		$query = new WP_Query($args);
		if ($query->have_posts()):
			while ($query->have_posts()):
				$query->the_post(); ?>
				<div class="about-block">
					<div class="about-block-left bg-<?php the_field('about_color'); ?>">
						<div class="profile">
							<!-- <div class="profile-img" style="background-image:url(/wp-content/uploads/2024/01/cha_green.png);"> -->
							<div class="profile-img" style="background-image:url(<?php the_field('about_image'); ?>);">
							</div>
							<div class="profile-text bebas">
								<?php the_title(); ?>
							</div>
						</div>
					</div>
					<div class="about-block-right">
						<div class="profile-des">
							<?php the_field('about_desc'); ?>
						</div>
						<div class="profile-link-box">
							<?php the_field('about_link'); ?>
							<?php the_field('about_link2'); ?>

						</div>

					</div>
				</div>

			<?php endwhile; endif; ?>



		<div class="about-block-e">
			<div class="about-block-end">
				<div class="credit bebas">credit</div>
				<div class="end-des">ebsite by. Haneul Park<br />
					Motion Graphic by. Jiwon Jeong<br />
					Character by. Alex Golyanov & Lina
				</div>
			</div>
			<div class="about-block-end">
				<div class="credit bebas">contact</div>
				<div class="profile-link-box">
					<div class="profile-link">Instagram<a href=""> @empty_green</a>

					</div>
					<div class="profile-link">
						E-mail<a href=""> green@empty.com</a></div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();





