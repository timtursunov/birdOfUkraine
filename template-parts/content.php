<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package birds
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<button>
			<a href="entry-title">
				<?php
				the_title()
			?>
			</a>
		</button>
	</header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->
