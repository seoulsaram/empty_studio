<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Empty_Studio
 */

?>
<footer id="colophon" class="site-footer">
	<div class="site-info">
		<div class="footer-box">
			<a hlang="ko-KR" lang="ko-KR" href="<?php echo site_url('/ko'); ?>" class="footer-btn ko">
				<img src="/wp-content/uploads/2024/01/icon_lang.png" alt="language">
				<span class="footer-btn-text bebas">Korean</span>
			</a>
			<a hlang="en-US" lang="en-US" href="<?php echo site_url(); ?>" class="footer-btn en">
				<img src="/wp-content/uploads/2024/01/icon_lang.png" alt="language">
				<span class="footer-btn-text bebas">English</span>
			</a>
			<a href="" target="_blank" class="footer-btn">
				<img src="/wp-content/uploads/2024/01/icon_insta.png" alt="instagram">
				<span class="footer-btn-text bebas">Instagram</span>
			</a>
			<a href="" target="_blank" class="footer-btn">

				<span class="footer-btn-text bebas">Copyright © empty studio</span>
			</a>
			<a href="" target="_blank" class="footer-btn">
				<img src="/wp-content/uploads/2024/01/icon_up.png" alt="go to top">
				<span class="footer-btn-text bebas">go to top</span>
			</a>
		</div>
	</div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>