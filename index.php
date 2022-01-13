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
 * @package birds
 */
get_header();
?>	
	<?php
			$lang=get_bloginfo("language");
	?>
	<div class='website website-main'>	
		<main id="primary" class="site-main">
			<div class='nav--mobile'>
				<div class='nav__line--mobile'></div>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
					<div class='site-lang--mobile'>
						<a lang='uk' hreflang='uk' href="<?php echo site_url(); ?>">UKR</a>
						<a lang='en_CA' hreflang='en_CA' href="<?php echo site_url('/en'); ?>">ENG</a>
					</div>
			</div>
			<div class='footer-close__box'>
				<img class='footer-close' src="<?php bloginfo('template_url'); ?>/assets/images/Vector.png" alt="">
			</div>		
		<?php if( is_front_page()) { ?>
			<div class='site-grid main-page'>
				<div class='site-bio site-bio__tablet'>
					<?php query_posts('posts_per_page=1&category_name=Підтримати проект'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<p>
						<?php
							the_field('описание')
						?>
					</p>
					<?php
					endwhile; 
					endif; 
					?>
					<a class='site-bio__button site-bio__absolute-btn' target="_blank" href="https://biodiversity.org.ua/donate">
						<?php
							the_title()
						?>
					</a>
				</div>
				<div class='site-hero site-hero__tablet'>
							<?php query_posts('posts_per_page=1&category_name=картини&orderby=rand'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class='site-hero__overlay '>
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
								<a href="<?php echo get_permalink(); ?>">
									<img class='site-hero__img' src="<?php echo $url ?>" />
								</a>
							</div>
					<?php
					endwhile; 
					endif; 
					?>
						<a href="<?php echo get_permalink(); ?>" class='site-hero__text'>
							<?php the_title() ?>
						</a>
				</div>
				<div class='site-bio__mobile'>
					<?php query_posts('posts_per_page=1&category_name=Підтримати проект'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<p>
							<?php
								the_field('описание')
							?>
						</p>
						<?php
						endwhile; 
						endif; 
						?>
					<a class='site-bio__mobile-button' target="_blank" href="https://biodiversity.org.ua/donate">Підтримати проект</a>
				</div>
				<div class="owl-carousel owl-theme owl--mobile">
								<?php query_posts('posts_per_page=1&category_name=звичайні-птахи&orderby=rand'); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<div class='item site-hero__overlay'>
											<a href="<?php echo get_permalink(); ?>">
												<img class='site-hero__img' src="<?php echo $url ?>" />
											</a>	
											<a href="<?php echo get_permalink(); ?>" class='site-hero__text'>
												<?php the_title() ?>
											</a>
								</div>
									<?php
									endwhile; 
									endif; 
									?>
								<?php query_posts('posts_per_page=1&category_name=птахи під загрозою зникнення&orderby=rand'); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<div class='item site-hero__overlay'>
											<a href="<?php echo get_permalink(); ?>">
												<img class='site-hero__img' src="<?php echo $url ?>" />
											</a>	
											<a href="<?php echo get_permalink(); ?>" class='site-hero__text'>
												<?php the_title() ?>
											</a>
								</div>
									<?php
									endwhile; 
									endif; 
									?>	
				</div>
				<div class='site-hero'>
					<?php query_posts('posts_per_page=1&category_name=звичайні птахи&orderby=rand'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class='site-hero__overlay'>
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
								<a  href="<?php echo site_url('/')?><?php $key_name = get_post_custom_values($key = 'type'); echo $key_name[0]; ?>" >
									<?php the_post_thumbnail( 'predefImageSize', ['class' => 'site-hero__img', 'title' => 'Feature Image'] ); ?>
								</a>
							</div>
					<?php
					endwhile; 
					endif; 
					?>
						<?php if ( $lang ==='uk') : ?>	
							<a class='site-bio__button site-bio__absolute-btn' href="<?php echo site_url('/')?>звичайні-птахи" class='site-hero__text'>
								Звичайні Птахи
							</a>
						<?php endif ?>		
						<?php if ( $lang ==='en-CA') : ?>	
							<a class='site-bio__button site-bio__absolute-btn' href="<?php echo site_url('/')?>ordinary-birds" class='site-hero__text'>
								Ordinary Birds
							</a>
						<?php endif ?>	
				</div>
				<div class='site-hero'>
				<?php query_posts('posts_per_page=1&category_name=птахи під загрозою зникнення&orderby&orderby=rand'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class='site-hero__overlay'>
								<?php if ( $lang ==='uk') : ?>	
									<a href="<?php echo site_url('/')?>птахи-під-загрозою-зникнення">
										<?php the_post_thumbnail( 'predefImageSize', ['class' => 'site-hero__img', 'title' => 'Feature Image'] ); ?>
									</a>
								<?php endif ?>		
								<?php if ( $lang ==='en-CA') : ?>	
									<a href="<?php echo site_url('/')?>endangered-birds">
										<?php the_post_thumbnail( 'predefImageSize', ['class' => 'site-hero__img', 'title' => 'Feature Image'] ); ?>
									</a>
								<?php endif ?>	
							</div>
					<?php
					endwhile; 
					endif; 
					?>
						<?php if ( $lang ==='uk') : ?>	
							<a class='site-bio__button site-bio__absolute-btn' href="<?php echo site_url('/')?>птахи-під-загрозою-зникнення" class='site-hero__text'>
								Птахи під загрозою зникнення
							</a>
						<?php endif ?>		
						<?php if ( $lang ==='en-CA') : ?>	
							<a class='site-bio__button site-bio__absolute-btn' href="<?php echo site_url('/')?>endangered-birds" class='site-hero__text'>
								Endangered Birds
							</a>
						<?php endif ?>	
				</div>
				<div class='site-hero site-hero__tablet--last'>
					<?php query_posts('posts_per_page=1&category_name=Про Митця'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class='site-hero__overlay'>
								<?php if( get_bloginfo('language') == 'en-CA' ) : ?>
									<a href="<?php echo site_url('/en/the-painter')?>">
										<?php the_post_thumbnail( 'predefImageSize', ['class' => 'site-hero__img', 'title' => 'Feature Image'] ); ?>
									</a>
								<?php elseif( get_bloginfo('language') == 'uk' ) : ?>
									<a href="<?php echo site_url('/про-митца')?>">
										<?php the_post_thumbnail( 'predefImageSize', ['class' => 'site-hero__img', 'title' => 'Feature Image'] ); ?>
									</a>
								<?php endif; ?>
							</div>
				</div>
				<div class='site-bio site-bio--longer'>
					<p class='site-bio__mobile-text'>
						<p class='site-bio__mobile-text'>
							<p>
								<?php
									the_field('описание')
								?>
							</p>
							<?php
							endwhile; 
							endif; 
							?>
						</p>
					</p>
						<?php if( get_bloginfo('language') == 'en-CA' ) : ?>
							<a class='site-bio__button site-bio__absolute-btn' href="<?php echo site_url('/en/the-painter')?>">
								<?php
									the_title()
								?>
							</a>
						<?php elseif( get_bloginfo('language') == 'uk' ) : ?>
							<a class='site-bio__button site-bio__absolute-btn' href="<?php echo site_url('/про-митца')?>">
								<?php
									the_title()
								?>
							</a>
						<?php endif; ?>
				</div>
				<div class='site-bio__mobile'>
					<?php query_posts('posts_per_page=1&category_name=Про Митця'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<p>
							<?php
									the_field('описание')
								?>
							<?php
							endwhile; 
							endif; 
							?>
						</p>
					<?php if( get_bloginfo('language') == 'en-CA' ) : ?>
							<a class='site-bio__mobile-button' href="<?php echo site_url('/en/the-painter')?>">
								<?php
									the_title()
								?>
							</a>
						<?php elseif( get_bloginfo('language') == 'uk' ) : ?>
							<a class='site-bio__mobile-button' href="<?php echo site_url('/про-митца')?>">
								<?php
									the_title()
								?>
							</a>
					<?php endif; ?>
				</div>
				<div class='site-bio site-bio__tablet--last site-bio--longer'>
						<?php query_posts('posts_per_page=1&category_name=Про Фонд'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<p>
							<?php
								the_field('описание')
							?>
						</p>
					<?php if( get_bloginfo('language') == 'en-CA' ) : ?>
							<a class='site-bio__button site-bio__absolute-btn' href="<?php echo site_url('/en/the-fund')?>">
								<?php
									the_title()
								?>
							</a>
						<?php elseif( get_bloginfo('language') == 'uk' ) : ?>
							<a class='site-bio__button site-bio__absolute-btn' href="<?php echo site_url('/про-фонд')?>">
								<?php
									the_title()
								?>
							</a>
					<?php endif; ?>
				</div>
				<div class='site-hero site-hero__tablet--last'>
							<div class='site-hero__overlay site-hero__overlay--hidden '>
								<?php  ?>
								<?php if( get_bloginfo('language') == 'en-CA' ) : ?>
									<a href="<?php echo site_url('/en/the-fund')?>">
										<?php the_post_thumbnail( 'predefImageSize', ['class' => 'site-hero__img', 'title' => 'Feature Image'] ); ?>
									</a>
								<?php elseif( get_bloginfo('language') == 'uk' ) : ?>
									<a href="<?php echo site_url('/про-фонд')?>">
										<?php the_post_thumbnail( 'predefImageSize', ['class' => 'site-hero__img', 'title' => 'Feature Image'] ); ?>
									</a>
								<?php endif; ?>
							</div>
							<?php
							endwhile; 
							endif; 
							?>
				</div>
				<div class='site-bio__mobile'>
						<?php query_posts('posts_per_page=1&category_name=Про Фонд'); ?>
						<p>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<?php
									the_field('описание')
								?>
							<?php
							endwhile; 
							endif; 
							?>
						</p>
						<?php if( get_bloginfo('language') == 'en-CA' ) : ?>
							<a class='site-bio__mobile-button' href="<?php echo site_url('/en/the-fund')?>">
								<?php
									the_title()
								?>
							</a>
						<?php elseif( get_bloginfo('language') == 'uk' ) : ?>
							<a class='site-bio__mobile-button' href="<?php echo site_url('/про-фонд')?>">
								<?php
									the_title()
								?>
							</a>
						<?php endif; ?>
				</div>
		</div>
		<?php } ?>
		</main><!-- #main -->
	</div>
<?php

get_footer();
