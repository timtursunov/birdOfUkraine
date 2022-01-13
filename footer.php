<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package birds
 */

?>
	<footer id="colophon" class="site-footer">
		<div class='footer'>
			<div class='footer-nav'>
					<img class='footer-img' src="<?php bloginfo('template_url'); ?>/assets/images/footer.svg" alt="">
				<div class='footer-nav__box'>
					<?php query_posts('posts_per_page=1&category_name=contact information'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<a  class='footer-nav__item footer__email--desktop' href="mailto:<?php the_field('email') ?>">
						<?php 
						the_field('email')
						?>
					</a>
					<div class='footer-author__box'>
						<p class='footer-author__text'>
							<span class='footer-author__span'>Website By </span>
							<a class='footer-nav__item last' target="_blank" href="https://denizkilicci.com/">Deniz Kilicci </a>
							<span class='footer-author__span--last'>+</span>
							<a class='footer-nav__item last'  target="_blank" href="https://timturs.com">Tim Turs</a>
						</p>
					</div>
					<p class='footer__copyrights'>&copy; Website Title <?php echo date('Y') ?>. All Rights Reserved.</p>
				</div>
			</div>
			<div class='footer-nav '>
				<div class='footer-nav__box second-footer-nav'>
					<div>
						<?php
							wp_nav_menu(
							array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
								)
							);
						?>
					</div>
					<div class='footer-nav__box two-line-grid'>
						<a class='footer-nav__item' target="_blank" href="<?php the_field('facebook') ?>">Facebook</a>
						<a class='footer-nav__item' target="_blank" href="<?php the_field('instagram')?>">Instagram</a>
						<a class='footer-nav__item' target="_blank" class='last' href="<?php the_field('youtube')?>">Youtube</a>
					</div>
				</div>
			</div>
			<div class='footer-nav'>
				<div class='footer-nav__box'>
					<a class='footer-nav__item' target="_blank" href="<?php the_field('facebook')?>">Facebook</a>
					<a class='footer-nav__item' target="_blank" href="<?php the_field('instagram')?>">Instagram</a>
					<a class='footer-nav__item' target="_blank" href="<?php the_field('youtube')?>">Youtube</a>
					<a class='footer__email--mobile' href="mailto:<?php the_field('email') ?>">
						<?php 
						the_field('email')
						?>
					</a>
					

				</div>
				<?php
					endwhile; 
					endif; 
				?>
			</div>
		</div>
		<div>
			
		</div>		
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer();
?>
<script src="https://unpkg.com/default-passive-events"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    responsive:{
        0:{
            items:1
        },
    }
})
</script>
</body>
</html>
