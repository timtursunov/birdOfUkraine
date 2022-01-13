<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package birds
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'birds' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site__branding">
				<h1 class='site__heading'>

				<?php if( get_bloginfo('language') == 'en-CA' ) : ?>
					<a href="<?php echo site_url('/en'); ?>">
						Birds of Ukraine
					</a>
				<?php elseif( get_bloginfo('language') == 'uk' ) : ?>
					<a href="<?php echo site_url('/'); ?>">
						Птахи України
					</a>
				<?php endif; ?>
				</h1>
			<nav class='site__nav'>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>
			<div class='site__lang'>
					<?php
						get_sidebar()
					?>
			</div>
			<div class='footer-burger__div'>
				<img class='footer-burger' src="<?php bloginfo('template_url'); ?>/assets/images/Burg.png" alt="">
			</div>
		</div><!-- .site-branding -->
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
					<?php
											get_template_part( 'sidebar')
					?>

				</div>
		</div>
		<div class='footer-close__box'>
			<img class='footer-close' src="<?php bloginfo('template_url'); ?>/assets/images/Vector.png" alt="">
		</div>	


	</header><!-- #masthead -->

