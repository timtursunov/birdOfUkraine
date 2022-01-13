<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package birds
 */

get_header();
?>
	<div class='website'>	
		<?php if ( is_page('про Митца') || is_page('The Painter')) : ?>
			<div class='painter-wrapper'>
				<div class='painter'>
					<?php query_posts('posts_per_page=1&category_name=Про Митця'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class='painter-hero'>
							<p class='painter-subheading'>
								<?php
									the_field('параграф1')
								?>
							</p>
							<h3 class='painter-heading'>
								<?php
									the_field('параграф2')
								?>
							</h3>
							<p class='painter-text'>
								<?php
									the_field('параграф3')
								?>
							</p>
							<div class='painter-painting'>
								<?php if ( has_post_thumbnail() ) { ?>
									<div class='painter-overlay'>
										<?php the_post_thumbnail( 'predefImageSize', ['class' => 'painter-img', 'title' => 'Feature Image'] ); ?>
									</div>
								<?php 
								}else{ 
								?>
								<?php
									} 
								?>
							</div>
						</div>
						<div class='painter__text-list'>
							<div class='painter__text-list-item'>
								<div class='painter__subheading-text'>
									<div class='global-bullet'></div>
									<p class='painter-list__subheading'>
										<?php
											the_field('параграф4')
										?>
									</p>
								</div>
								<p class='painter-text'>
									<?php
										the_field('параграф5')
									?>
								</p>
								<p class='painter-text'>
									<?php
										the_field('параграф6')
									?>
								</p>
								<p class='painter-text'>
									<?php
										the_field('параграф7')
									?>
								</p>
								<p class='painter-text'>
									<?php
										the_field('параграф8')
									?>
								</p>
							</div>
					</div>
					<?php
						endwhile; 
						endif; 
					?>
				</div>
				</div>
		<?php endif; ?>
		<?php if ( is_page('про Проект') || is_page('The Project') ) : ?>
				<div class='project-wrapper'>
					<div class='project'>
					<?php query_posts('posts_per_page=1&category_name=Про Проект'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class='project-hero'>
							<p class='project-subheading'>
								<?php
									the_field('параграф1')
								?>
							</p>
							<h3 class='project-heading'>
								<?php
									the_field('параграф2')
								?>
							</h3>
							<p class='project-text'>
								<?php
									the_field('параграф3')
								?>
							</p>
							<div class='project-painting'>
								<?php if ( has_post_thumbnail() ) { ?>
									<div class='project-overlay'>
										<?php the_post_thumbnail( 'predefImageSize', ['class' => 'project-img', 'title' => 'Feature Image'] ); ?>
									</div>
								<?php 
								}else{ 
								?>
								
								<?php
									} 
								?>
							</div>
						</div>
						<div class='project__text-list'>
							<div class='project__text-list-item'>
								<div class='project__subheading-text'>
									<div class='global-bullet'></div>
									<p class='project-list__subheading'>
										<?php
											the_field('параграф4')
										?>
									</p>
								</div>
								<p class='project-text'>
									<?php
										the_field('параграф5')
									?>
								</p>
								<p class='project-text'>
									<?php
										the_field('параграф6')
									?>
								</p>
								<p class='project-text'>
									<?php
										the_field('параграф7')
									?>
								</p>
								<p class='project-text'>
									<?php
										the_field('параграф8')
									?>
								</p>
							</div>
					</div>
					<?php
						endwhile; 
						endif; 
					?>
				</div>
		<?php endif; ?>
		<?php if ( is_page('про Фонд') || is_page('The Fund')) : ?>
				<div class='foundation-wrapper'>
					<div class='foundation'>
					<?php query_posts('posts_per_page=1&category_name=Про Фонд'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class='foundation-hero'>
							<p class='foundation-subheading'>
								<?php
									the_field('параграф1')
								?>
							</p>
							<h3 class='foundation-heading'>
								<?php
									the_field('параграф2')
								?>
							</h3>
							<?php if ( has_post_thumbnail() ) { ?>
								<div class='foundation-painting'>
									<?php the_post_thumbnail( 'predefImageSize', ['class' => 'foundation-img', 'title' => 'Feature Image'] ); ?>
								</div>
								<?php 
								}else{ 
								?>
								<?php
									} 
								?>
						</div>
						<div class='foundation__text-list'>
							<div class='foundation__text-list-item'>
								<div class='foundation__subheading-text'>
									<div class='global-bullet'></div>
									<p class='foundation-list__subheading'>
										<?php
											the_field('параграф3')
										?>
									</p>
								</div>
								<p class='foundation-text'>
									<?php
										the_field('параграф4')
									?>
								</p>
								<p class='foundation-text'>
									<?php
										the_field('параграф5')
									?>
								</p>
								<p class='foundation-text'>
									<?php
										the_field('параграф6')
									?>
								</p>
								<p class='foundation-text'>
									<?php
										the_field('параграф7')
									?>
								</p>
							</div>
							<div class='foundation__text-list-item'>
								<div class='foundation__subheading-text'>
									<div class='global-bullet'></div>
									<p class='foundation-list__subheading'>
										<?php
											the_field('параграф8')
										?>
									</p>
								</div>
								<p class='foundation-text'>
									<?php
										the_field('параграф9')
									?>
								</p>
								<p class='foundation-text'>
									<?php
										the_field('параграф10')
									?>
								</p>
								<p class='foundation-text'>
									<?php
										the_field('параграф11')
									?>
								</p>
							</div>
							<div class='foundation__text-list-item'>
								<div class='foundation__subheading-text'>
									<div class='global-bullet'></div>
									<p class='foundation-list__subheading'>
										<?php
											the_field('параграф12')
										?>
									</p>
								</div>
								<p class='foundation-text'>
									<?php
										the_field('параграф13')
									?>
								</p>
								<p class='foundation-text'>
									<?php
										the_field('параграф14')
									?>
								</p>
							</div>
							<div class='foundation__text-list-item'>
								<div class='foundation__subheading-text'>
									<div class='global-bullet'></div>
									<p class='foundation-list__subheading'>
										<?php
											the_field('параграф15')
										?>
									</p>
								</div>
								<p class='foundation-text'>
									<?php
										the_field('параграф16')
									?>
								</p>
								<p class='foundation-text'>
									<?php
										the_field('параграф17')
									?>
								</p>
								<p class='foundation-text'>
									<?php
										the_field('параграф18')
									?>
								</p>
								<p class='foundation-text'>
									<?php
										the_field('параграф19')
									?>
								</p>
							</div>
							<div class='foundation__text-list-item'>
								<div class='foundation__subheading-text'>
									<div class='global-bullet'></div>
									<p class='foundation-list__subheading'>
										<?php
											the_field('параграф20')
										?>
									</p>
								</div>
								<p class='foundation-text'>
									<?php
										the_field('параграф21')
									?>
								</p>
								<p class='foundation-text'>
									<?php
										the_field('параграф22')
									?>
								</p>
							</div>
							<div class='foundation__text-list-item'>
								<div class='foundation__subheading-text'>
									<div class='global-bullet'></div>
									<p class='foundation-list__subheading'>
										<?php
											the_field('параграф23')
										?>
									</p>
								</div>
								<p class='foundation-text'>
									<?php
										the_field('параграф24')
									?>
								</p>
							</div>
						</div>
					</div>
					<?php
						endwhile; 
						endif; 
					?>
				</div>
		<?php endif; ?>
			<?php if ( is_page('Картини')) : ?>	
			<div id='atypical' class='allbirds'>
				<nav class='allbirds-nav'>
				<div class='allbirds-link__box--current'>
						<a class='allbirds__a---current' href="<?php echo site_url('/картини') ?>">Картини</a>
					</div>
					<div>
						<a class='allbirds-link__box--other' href="<?php echo site_url('/звичайні-птахи') ?>">Звичайні Птахи</a>
					</div>
					<div>
						<a class='allbirds-link__box--other' href="<?php echo site_url('/птахи-під-загрозою-зникнення') ?>">Птахи під загрозою зникнення</a>
					</div>
				</nav>
				<?php query_posts('posts_per_page=20()&category_name=картини&order=ASC'); ?>
				<div class='site-grid'>
					<?php 
						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class='allbirds-item'>
							<div class='site-hero__overlay'>
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
								<a href="<?php echo get_permalink(); ?>">
									<img class='site-hero__img' src="<?php echo $url ?>" />
								</a>
							</div>
							<a href="<?php echo get_permalink(); ?>" class='allbirds-text'>
							<?php the_title() ?>
							</a>
						</div>
						<?php
						endwhile; 
						endif; 
					?>
				</div>
			</div>
		<?php endif; ?>
		<?php if ( is_page('звичайні-птахи') ) : ?>
			<div id='atypical' class='allbirds'>
				<nav class='allbirds-nav'>
					<div>
						<a class='allbirds-link__box--other' href="<?php echo site_url('/картини') ?>">Картини</a>
					</div>
					<div class='allbirds-link__box--current'>
						<a class='allbirds__a---current' href="<?php echo site_url('/звичайні-птахи') ?>">Звичайні Птахи</a>
					</div>
					<div>
						<a class='allbirds-link__box--other' href="<?php echo site_url('/птахи-під-загрозою-зникнення') ?>">Птахи під загрозою зникнення</a>
					</div>
				</nav>
				<?php query_posts('posts_per_page=20()&category_name=звичайні птахи&order=ASC'); ?>
				<div class='site-grid'>
					<?php 
						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class='allbirds-item'>
							<div class='site-hero__overlay'>
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
								<a href="<?php echo get_permalink(); ?>">
									<img class='site-hero__img' src="<?php echo $url ?>" />
								</a>
							</div>
							<a href="<?php echo get_permalink(); ?>" class='allbirds-text'>
							<?php the_title() ?>
							</a>
						</div>
						<?php
						endwhile; 
						endif; 
					?>
				</div>
			</div>
		<?php endif; ?>
		<?php if ( is_page('птахи-під-загрозою-зникнення') ) : ?>
			<div id='rare' class='allbirds'>
				<nav class='allbirds-nav'>
					<div>
						<a class='allbirds-link__box--other' href="<?php echo site_url('/картини') ?>">Картини</a>
					</div>
					<div>
						<a class='allbirds-link__box--other' href="<?php echo site_url('/звичайні-птахи') ?>">Звичайні Птахи</a>
					</div>
					<div class='allbirds-link__box--current'>
						<a class='allbirds__a---current' href="<?php echo site_url('/птахи-під-загрозою-зникнення') ?>">Птахи під загрозою зникнення</a>
					</div>
				</nav>
				<?php query_posts('posts_per_page=20()&category_name=Птахи під загрозою зникнення&order=ASC'); ?>
				<div class='site-grid'>
					<?php 
						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class='allbirds-item'>
							<div class='site-hero__overlay'>
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
								<a href="<?php echo get_permalink(); ?>">
									<img class='site-hero__img' src="<?php echo $url ?>" />
								</a>
							</div>
							<a href="<?php echo get_permalink(); ?>" class='allbirds-text'>
							<?php the_title() ?>
							</a>
						</div>
						<?php
						endwhile; 
						endif; 
					?>
				</div>
			</div>
		<?php endif; ?>				
	</div>
	<?php if ( is_page('Paintings')) : ?>	
			<div id='atypical' class='allbirds'>
				<nav class='allbirds-nav'>
				<div class='allbirds-link__box--current'>
						<a class='allbirds__a---current' href="<?php echo site_url('/paintings') ?>">Paintings</a>
					</div>
					<div>
						<a class='allbirds-link__box--other' href="<?php echo site_url('/ordinary-birds') ?>">Ordinary Birds</a>
					</div>
					<div>
						<a class='allbirds-link__box--other' href="<?php echo site_url('/endangered-birds') ?>">Endangered Birds</a>
					</div>
				</nav>
				<?php query_posts('posts_per_page=20()&category_name=картини&order=ASC'); ?>
				<div class='site-grid'>
					<?php 
						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class='allbirds-item'>
							<div class='site-hero__overlay'>
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
								<a href="<?php echo get_permalink(); ?>">
									<img class='site-hero__img' src="<?php echo $url ?>" />
								</a>
							</div>
							<a href="<?php echo get_permalink(); ?>" class='allbirds-text'>
							<?php the_title() ?>
							</a>
						</div>
						<?php
						endwhile; 
						endif; 
					?>
				</div>
			</div>
		<?php endif; ?>
		<?php if ( is_page('Ordinary Birds')) : ?>	
			<div id='atypical' class='allbirds'>
				<nav class='allbirds-nav'>
					<div>
						<a class='allbirds-link__box--other' href="<?php echo site_url('/paintings') ?>">Paintings</a>
					</div>
					<div class='allbirds-link__box--current'>
						<a class='allbirds__a---current' href="<?php echo site_url('/ordinary-birds') ?>">Ordinary Birds</a>
					</div>
					<div>
						<a class='allbirds-link__box--other' href="<?php echo site_url('/endangered-birds') ?>">Endangered Birds</a>
					</div>
				</nav>
				<?php query_posts('posts_per_page=20()&category_name=звичайні птахи&order=ASC'); ?>
				<div class='site-grid'>
					<?php 
						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class='allbirds-item'>
							<div class='site-hero__overlay'>
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
								<a href="<?php echo get_permalink(); ?>">
									<img class='site-hero__img' src="<?php echo $url ?>" />
								</a>
							</div>
							<a href="<?php echo get_permalink(); ?>" class='allbirds-text'>
							<?php the_title() ?>
							</a>
						</div>
						<?php
						endwhile; 
						endif; 
					?>
				</div>
			</div>
		<?php endif; ?>
		<?php if ( is_page('Endangered Birds')) : ?>	
			<div id='atypical' class='allbirds'>
				<nav class='allbirds-nav'>
				<div>
						<a class='allbirds-link__box--other' href="<?php echo site_url('/paintings') ?>">Paintings</a>
					</div>
					<div>
						<a class='allbirds-link__box--other' href="<?php echo site_url('/ordinary-birds') ?>">Ordinary Birds</a>
					</div>
					<div class='allbirds-link__box--current'>
						<a class='allbirds__a---current' href="<?php echo site_url('/endangered-birds') ?>">Endangered Birds</a>
					</div>
				</nav>
				<?php query_posts('posts_per_page=20()&category_name=Птахи під загрозою зникнення&order=ASC'); ?>
				<div class='site-grid'>
					<?php 
						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class='allbirds-item'>
							<div class='site-hero__overlay'>
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
								<a href="<?php echo get_permalink(); ?>">
									<img class='site-hero__img' src="<?php echo $url ?>" />
								</a>
							</div>
							<a href="<?php echo get_permalink(); ?>" class='allbirds-text'>
							<?php the_title() ?>
							</a>
						</div>
						<?php
						endwhile; 
						endif; 
					?>
				</div>
			</div>
		<?php endif; ?>
<?php
get_footer();


