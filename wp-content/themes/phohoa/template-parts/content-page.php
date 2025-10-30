<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Phohoa
 */

?>
<?php
$sub_heading = get_field('page_sub_heading', $post->ID);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
	<div class="post-thumbnail" style="background-image: url('<?php echo $url; ?>');">
		<header class="entry-header">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			<?php if ($sub_heading) { ?>
				<p class="sub-heading"><?php echo esc_html($sub_heading); ?></p>
			<?php } ?>
		</header><!-- .entry-header -->

	</div>

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->