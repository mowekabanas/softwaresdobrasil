<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js roboto">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<script src="<?php echo get_template_directory_uri() ?>/dist/js/villa.min.js"></script>
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>

<body class="grey">

<header class="Header white">

	<div class="HeaderLogo grey-200">

		<div class="Logo Logo--header">

			<img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="">

		</div>

	</div>

	<nav class="HeaderNav">

		<ul class="HeaderMenu">

			<li class="HeaderMenuItem">

				<a href="<?php echo get_home_url(); ?>" class="HeaderMenuItem-select-area">

					<span class="HeaderMenuItem-title">Softwares</span>

				</a>

			</li>

			<li class="HeaderMenuItem">

				<a href="#" class="HeaderMenuItem-select-area">

					<span class="HeaderMenuItem-title">Sobre</span>

				</a>

			</li>

		</ul>

	</nav>

</header>

<main class="Main">

	<div class="Main-background grey-200"></div>

	<div class="Main-inner">

		<nav class="MainNav" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">

			<?php if ( has_nav_menu( 'main' ) ) : ?>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'main',
						'depth'          => 1,
						'link_before'    => '<span class="MainMenuItem-title">',
						'link_after'     => '</span>',
						'menu_id'        => 'main-menu',
						'menu_class'     => 'MainMenu'
					) );
					?>
			<?php endif; ?>

			<ul class="MainMenu">

				<li class="MainMenuItem">

					<a href="#" class="MainMenuItem-select-area">

						<span class="MainMenuItem-title">PDV</span>

					</a>

					<ul class="MainSubMenu">

						<li class="MainSubMenuItem">

							<a href="#" class="MainSubMenuItem-select-area">

								<span class="MainSubMenuItem-title">Varejo</span>

							</a>

						</li>

						<li class="MainSubMenuItem">

							<a href="#" class="MainSubMenuItem-select-area">

								<span class="MainSubMenuItem-title">Moda</span>

							</a>

						</li>

						<li class="MainSubMenuItem">

							<a href="#" class="MainSubMenuItem-select-area">

								<span class="MainSubMenuItem-title">Atacado</span>

							</a>

						</li>


					</ul>

				</li>

				<li class="MainMenuItem">

					<a href="#" class="MainMenuItem-select-area">

						<span class="MainMenuItem-title">Saúde</span>

					</a>

				</li>

				<li class="MainMenuItem">

					<a href="#" class="MainMenuItem-select-area">

						<span class="MainMenuItem-title">Industria</span>

					</a>

					<ul class="MainSubMenu">

						<li class="MainSubMenuItem">

							<a href="#" class="MainSubMenuItem-select-area">

								<span class="MainSubMenuItem-title">Agroindustria</span>

							</a>

						</li>

						<li class="MainSubMenuItem">

							<a href="#" class="MainSubMenuItem-select-area">

								<span class="MainSubMenuItem-title">Manufatura</span>

							</a>

						</li>

						<li class="MainSubMenuItem">

							<a href="#" class="MainSubMenuItem-select-area">

								<span class="MainSubMenuItem-title">Alimenticio</span>

							</a>

						</li>

					</ul>

				</li>

				<li class="MainMenuItem">

					<a href="#" class="MainMenuItem-select-area">

						<span class="MainMenuItem-title">Serviços</span>

					</a>

					<ul class="MainSubMenu">

						<li class="MainSubMenuItem">

							<a href="#" class="MainSubMenuItem-select-area">

								<span class="MainSubMenuItem-title">Mecânica</span>

							</a>

						</li>

						<li class="MainSubMenuItem">

							<a href="#" class="MainSubMenuItem-select-area">

								<span class="MainSubMenuItem-title">Jurídico</span>

							</a>

						</li>

						<li class="MainSubMenuItem">

							<a href="#" class="MainSubMenuItem-select-area">

								<span class="MainSubMenuItem-title">Arquitetura</span>

							</a>

						</li>

					</ul>

				</li>

				<li class="MainMenuItem">

					<a href="#" class="MainMenuItem-select-area">

						<span class="MainMenuItem-title">Logística</span>

					</a>

					<ul class="MainSubMenu">

						<li class="MainSubMenuItem"></li>

					</ul>

				</li>

			</ul>

		</nav>

		<div class="MainSearchHold">

			<div class="MainSearchField">

				<?php get_search_form(); ?>

				<label for="MainSearchInput"></label>
				<input type="text" id="MainSearchInput" class="MainSearchInput" placeholder="Digite um tipo de software para ser localizado">

			</div>