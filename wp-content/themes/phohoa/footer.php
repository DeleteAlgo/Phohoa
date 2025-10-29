<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Phohoa
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer-navigation">
		<div class="container">
			<div class="d-flex justify-center py-5">
				<div class="col-3">
					<h3>About Us</h3>
					<p>At Phở Hòa, our passion is simple: to make a healthy Vietnamese phở noodle soup offering the same robust flavors and aromas of traditional phở. That’s why we’ve revolutionized the way phở is made; using top-grade meats to create a healthier soup broth that’s lower in calories and cholesterol.</p>
				</div>
				<div class="col-3">
					<h3>Download App</h3>
					<p>At Phở Hòa, our passion is simple: to make a healthy Vietnamese phở noodle soup offering the same robust flavors and aromas of traditional phở. That’s why we’ve revolutionized the way phở is made; using top-grade meats to create a healthier soup broth that’s lower in calories and cholesterol.</p>
					<h3>Connect With Us</h3>
					<p>At Phở Hòa, our passion is simple: to make a healthy Vietnamese phở noodle soup offering the same robust flavors and aromas of traditional phở. That’s why we’ve revolutionized the way phở is made; using top-grade meats to create a healthier soup broth that’s lower in calories and cholesterol.</p>
				</div>
				<div class="col-3">
					<h3>Links</h3>
					<?php wp_nav_menu('footer-menu'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="site-info">
			<a href="<?php echo esc_url(__('https://wordpress.org/', 'phohoa')); ?>">
				All right reserved © Pho Hoa 2025
			</a>
		</div><!-- .site-info -->
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>