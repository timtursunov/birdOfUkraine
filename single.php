<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package birds
 */

get_header();
?>
	<?php
		$category = get_the_category();
		$parent = get_cat_name($category[0]->category_parent);
		$lang=get_bloginfo("language");
		 
	?>
	<div class='single-zoom'>
		<div class='single-modal__close-box '>
			<div class='single-modal__close-icon'></div>
		</div>
		<div class='single-zoom__overlay'>
			<div class='single-zoom__border'>
				<?php the_post_thumbnail( 'predefImageSize', ['class' => 'single-zoom__img', 'title' => 'Feature Image'] ); ?>
			</div>
		</div>
	</div>
	<div class='website website-single'>
		<main id="primary" class="single single-page">
			<div class='single-grid'>
				<?php while ( have_posts() ) : ?>
				<div class='single-bio'>
					<div class='single-bio-short'>
						<div class='single-bio-short__heading-box'> 
							<?php if ( $lang ==='en-CA') : ?>	
								<a href="<?php echo site_url('/paintings')?>">
								Paintings
								</a>
								<p class='single-bio__dash'>/</p>
								<a class='single-bio-short__heading' href="<?php echo site_url('/')?><?php $key_name = get_post_custom_values($key = 'type'); echo $key_name[0]; ?>" class='single-subheading'>
									<?php $key_name = get_post_custom_values($key = 'category'); echo $key_name[0]; ?>
								</a>
							<?php endif ?>	
							<?php if ( $lang ==='uk') : ?>	
								<a href="<?php echo site_url('/картини')?>">
								Картини
								</a>
								<p class='single-bio__dash'>/</p>
								<a class='single-bio-short__heading' href="<?php echo site_url('/')?><?php $key_name = get_post_custom_values($key = 'type'); echo $key_name[0]; ?>" class='single-subheading'>
									<?php $key_name = get_post_custom_values($key = 'category'); echo $key_name[0]; ?>
								</a>
							<?php endif ?>	
						</div>
							<h2 class='single-heading'>
								<?php
									the_title()
								?>
							</h2>
							<p class='single-text'>
									<?php
											the_field('описание')
									?>
							</p>
					</div>
					<div class='single-painting--tablet'>
							<div class="single-overlay">
								<div class="single-img">
									<?php the_post_thumbnail( 'predefImageSize', ['class' => 'single-img__mobile', 'title' => 'Feature Image'] ); ?>
								</div>
							</div>
						</div>
					<div class='single-text__box'>
								<div class='single-subheading-box'>
									<div class='global-bullet'></div>
									<p class='single-subheading'>Пташина Історія</p>
								</div>
								<p class='single-text'>
									<?php
											the_field('пташина_історія')
									?>
								</p>
					</div>
					<div class='single-text__box'>
								<div class='single-subheading-box'>
									<div class='global-bullet'></div>
									<p class='single-subheading'>Академічний текст</p>
								</div>
								<p class='single-text'>
										<?php 
											the_field('академічний_текст')
										?>
								</p>
					</div>
					<?php if ( $lang ==='uk') : ?>	
						<div class='single-slide'>
							<?php
										the_post();
							
										the_post_navigation(
											array(
												'prev_text' => '<div class="arrow-left"> </div>' . '<span class="nav-subtitle">' . esc_html__( '< Попередня картина' )  ,
												'next_text' =>  '<span class="nav-subtitle">' . esc_html__( 'Наступна картина >' ) . '<div class="arrow-right"> </div>',
												'in_same_term' => true
											)
										);
							?>
						</div>
					<?php endif ?>	
					<?php if ( $lang ==='en-CA') : ?>	
						<div class='single-slide'>
							<?php
										the_post();
							
										the_post_navigation(
											array(
												'prev_text' => '<div class="arrow-left"> </div>' . '<span class="nav-subtitle">' . esc_html__( '< Previous painting' )  ,
												'next_text' =>  '<span class="nav-subtitle">' . esc_html__( 'Next painting >' ) . '<div class="arrow-right"> </div>',
												'in_same_term' => true
											)
										);
							?>
						</div>
					<?php endif ?>	

			</div>
			<div class='single-painting'>
						<div class="single-overlay single-overlay--zoom">
							<?php the_post_thumbnail( 'predefImageSize', ['class' => 'single-img__zoom', 'title' => 'Feature Image'] );
							endwhile; ?>
						</div>
			</div>
		</main><!-- #main -->
		<?php
		get_footer();
		?>
		

	</div>
	
	

	
	<?php
	





