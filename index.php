<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Empty_Studio
 */

get_header();
?>
<main id="primary" class="site-main">
	<div class="title">
		<div class="people z2 pink">
			<lottie-player src="https://lottie.host/351d28f1-0151-4741-8bca-394f41aea807/IydLv4CPwg.json"
				background="transparent" speed="1" style="width: 300px;" loop autoplay></lottie-player>
		</div>
		<div class="people z2 yellow">
			<lottie-player src="https://lottie.host/fcf7d421-105d-426b-a311-8d574525888b/C33YiMiTHR.json"
				background="transparent" speed="1" style="width: 300px;;" loop autoplay></lottie-player>
		</div>
		<div class="people z2 green">
			<lottie-player src="https://lottie.host/9bf69e74-48f8-4113-8fa4-cdd61d406d52/gnGkbrmGvr.json"
				background="transparent" speed="1" style="width: 300px;" loop autoplay></lottie-player>
		</div>
		<div class="people z2 orange">
			<lottie-player src="https://lottie.host/70bddfee-a3cc-47d1-bdb5-cdccbd0bac35/7NNZdLrrvL.json"
				background="transparent" speed="1" style="width: 300px;" loop autoplay></lottie-player>
		</div>
		<div class="people z2 blue">
			<lottie-player src="https://lottie.host/977cda52-e2cd-4ebf-a2a8-f14dd0064df9/hjXyxnfixR.json"
				background="transparent" speed="1" style="width: 300px;" loop autoplay></lottie-player>
		</div>
		<div class="title-box">
			<div class="svg-container z1">
				<svg class="svg-content-responsive" preserveAspectRatio="none" viewBox="0 0 133 954" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path d="M2 2H131.302V137.712H49.4126V388.791H114.493V524.503H49.4126V816.289H131.302V952H2V2Z"
						fill="white" stroke="black" stroke-width="2.5" />
				</svg>
			</div>
			<div class="svg-container-m z3">
				<svg class="svg-content-responsive" preserveAspectRatio="none" viewBox="0 0 200 954" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						d="M1.45172 2H69.1171L99.2815 681.922H100.14L130.314 2H197.98V952H153.152V232.715H152.294L117.817 952H78.1704L43.6839 232.715H42.8255V952H1.45172V2Z"
						fill="white" stroke="black" stroke-width="2.5" />
				</svg>
			</div>
			<div class="svg-container z1">
				<svg class="svg-content-responsive" preserveAspectRatio="none" viewBox="0 0 144 954" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						d="M1.32458 2H71.1459C94.7025 2 112.37 21.9148 124.158 61.7153C135.937 101.535 141.826 159.899 141.826 236.787V330.43C141.826 407.337 135.937 465.701 124.158 505.501C112.37 545.321 94.7025 565.216 71.1459 565.216H48.7372V952H1.32458V2ZM71.1459 429.498C78.9016 429.498 84.7209 422.711 88.6038 409.136C92.4866 395.561 94.423 372.496 94.423 339.92V227.277C94.423 194.711 92.4866 171.636 88.6038 158.061C84.7209 144.486 78.9116 137.699 71.1459 137.699H48.7372V429.488H71.1459V429.498Z"
						fill="white" stroke="black" stroke-width="2.5" />
				</svg>
			</div>
			<div class="svg-container z3">
				<svg class="svg-content-responsive" preserveAspectRatio="none" viewBox="0 0 150 954" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path d="M51.6083 137.71H2.04956V2H148.59V137.71H99.0209V952H51.6083V137.71Z" fill="white"
						stroke="black" stroke-width="2.5" />
				</svg>
			</div>
			<div class="svg-container z1">
				<svg class="svg-content-responsive" preserveAspectRatio="none" viewBox="0 0 166 954" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						d="M59.674 547.573L2.34961 2H52.7767L85.0971 350.786H85.9556L118.286 2H164.401L107.077 547.573V952H59.664V547.573H59.674Z"
						fill="white" stroke="black" stroke-width="2.5" />
				</svg>
			</div>
		</div>
		<div class="title-box">
			<div class="svg-container z1">
				<svg class="svg-content-responsive" preserveAspectRatio="none" viewBox="0 0 144 954" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						d="M18.9441 891.962C7.19571 851.944 1.33655 794.549 1.33655 719.77V666.991H45.9943V730.323C45.9943 790.157 54.1592 820.049 70.4692 820.049C78.4844 820.049 84.5632 812.79 88.7255 798.281C92.8779 783.772 94.954 760.245 94.954 727.69C94.954 688.993 92.0893 654.912 86.3599 625.437C80.6304 595.982 70.0399 560.579 54.5784 519.22C35.1043 466.441 21.5094 418.736 13.7836 376.064C6.05782 333.412 2.18496 285.25 2.18496 231.587C2.18496 158.586 8.1939 102.076 20.2217 62.0377C32.2496 22.019 49.7074 2 72.6152 2C95.523 2 112.342 22.019 123.931 62.0377C135.529 102.076 141.329 159.47 141.329 234.221V272.48H96.6609V224.979C96.6609 193.318 94.6547 170.228 90.652 155.709C86.6394 141.2 80.7702 133.941 73.0444 133.941C57.2934 133.941 49.4279 163.425 49.4279 222.345C49.4279 255.785 52.3625 286.999 58.2317 316.027C64.1009 345.054 74.7613 380.243 90.2228 421.583C109.976 474.362 123.571 522.32 131.018 565.4C138.464 608.509 142.187 659.081 142.187 717.136C142.187 792.79 136.098 850.855 123.931 891.302C111.763 931.767 94.0857 952 70.8984 952C47.7111 952 30.6725 932 18.9341 891.962H18.9441Z"
						fill="white" stroke="black" stroke-width="2.5" />
				</svg>
			</div>
			<div class="svg-container z3">
				<svg class="svg-content-responsive" preserveAspectRatio="none" viewBox="0 0 150 954" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path d="M51.3008 137.712H1.74207V2H148.282V137.712H98.7134V952H51.3008V137.712Z" fill="white"
						stroke="black" stroke-width="2.5" />
				</svg>
			</div>
			<div class="svg-container z1">
				<svg class="svg-content-responsive" preserveAspectRatio="none" viewBox="0 0 145 954" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						d="M19.4997 891.108C7.43195 850.529 1.39307 792.32 1.39307 716.491V2H48.8057V727.204C48.8057 759.317 50.8819 782.527 55.0542 796.786C59.2165 811.064 65.1856 818.194 72.9413 818.194C80.697 818.194 86.656 811.064 90.8283 796.786C94.9906 782.527 97.0768 759.317 97.0768 727.204V2H142.763V716.5C142.763 792.33 136.734 850.529 124.666 891.117C112.598 931.715 95.0705 952 72.0829 952C49.0952 952 31.5675 931.715 19.4997 891.117V891.108Z"
						fill="white" stroke="black" stroke-width="2.5" />
				</svg>
			</div>
			<div class="svg-container z3">
				<svg class="svg-content-responsive" preserveAspectRatio="none" viewBox="0 0 146 954" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						d="M1.38074 2H73.7872C97.3438 2 115.011 21.9148 126.8 61.7153C138.578 101.535 144.467 159.899 144.467 236.787V717.213C144.467 794.12 138.578 852.484 126.8 892.285C115.011 932.105 97.3438 952 73.7872 952H1.38074V2ZM72.9288 816.272C80.6846 816.272 86.6436 809.037 90.8159 794.558C94.9783 780.098 97.0644 756.557 97.0644 723.991V230C97.0644 197.424 94.9783 173.911 90.8159 159.423C86.6436 144.963 80.6846 137.709 72.9288 137.709H48.7934V816.272H72.9288Z"
						fill="white" stroke="black" stroke-width="2.5" />
				</svg>
			</div>
			<div class="svg-container-i z1">
				<svg class="svg-content-responsive" preserveAspectRatio="none" viewBox="0 0 51 954" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path d="M1.35815 2H48.7708V952H1.35815V2Z" fill="white" stroke="black" stroke-width="2.5" />
				</svg>
			</div>
			<div class="svg-container z3">
				<svg class="svg-content-responsive" preserveAspectRatio="none" viewBox="0 0 147 954" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						d="M20.0302 891.302C7.71288 850.856 1.56421 793.667 1.56421 719.772V234.228C1.56421 160.343 7.71288 103.173 20.0302 62.6978C32.3375 22.2521 50.0949 2 73.2822 2C96.4695 2 114.217 22.2423 126.534 62.6978C138.841 103.163 145 160.333 145 234.228V719.772C145 793.657 138.841 850.847 126.534 891.302C114.217 931.767 96.4695 952 73.2822 952C50.0949 952 32.3375 931.777 20.0302 891.302ZM97.7571 729.014V224.996C97.7571 164.298 89.6021 133.959 73.2822 133.959C56.9622 133.959 48.8072 164.308 48.8072 224.996V729.014C48.8072 789.711 56.9622 820.051 73.2822 820.051C89.6021 820.051 97.7571 789.702 97.7571 729.014Z"
						fill="white" stroke="black" stroke-width="2.5" />
				</svg>
			</div>
		</div>
	</div>
	<div class="info bebas">
		<div class="info-box">EMPTY Studio is an example for class created by Haneul park.
		</div>
		<div class="info-box">It's a studio that doesn't really exist, and Green, Orange, yellow, pink and blue 5
			friends
			are just graphic ASSETS for class.</div>
	</div>
	<div class="news">
		<div class="section-title bebas">News</div>
		<div class="news-content">
			<?php
			$args = array(
				'post_type' => 'news',
				'post_status' => 'publish',
				'posts_per_page' => 100,
				'order' => 'asc'
			);
			$query = new WP_Query($args);
			if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post(); ?>

					<a href="<?php the_field('news_link'); ?>" class="news-block">
						<div class="news-img" style="background-image:url(<?php the_field('news_img'); ?>);">
						</div>
						<div class="news-textbox">
							<div class="news-category <?php the_field('news_label_color'); ?>">
								<?php the_field('news_category'); ?>
							</div>
							<div class="news-info">
								<span class="info-text">
									<?php the_title(); ?>
								</span>
								<span class="info-date">
									<?php the_field('news_date'); ?>
								</span>
							</div>
						</div>
					</a>

				<?php endwhile; endif; ?>
		</div>
	</div>
	<div class="archive">
		<div class="section-title bebas">Project Archive</div>
		<div class="archive-content">
			<?php
			$args = array(
				'post_type' => 'projects', // function.php에서 register_post_type의 첫번째 인자로 넣은 것과 같은 것을 넣어줌.
				'post_status' => 'publish', // 포스트 중에서 publish된 것 만 보여주겠다. (draft(작성중인 것)은 보여주지 않음)
				'posts_per_page' => 100, // 한 페이지 당 보여줄 갯수
				'order' => 'asc',
			);
			$query = new WP_Query($args);
			if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post(); ?>

					<a href="<?php the_permalink() ?>" class="archive-block">
						<div class="archive-image" style="background-image:url(<?php the_field('project_image'); ?>);"></div>
						<div class="archive-text">
							<?php the_title(); ?>
						</div>
					</a>

				<?php endwhile; endif; ?>
		</div>


	</div>
</main><!-- #main -->

<?php

get_footer();
