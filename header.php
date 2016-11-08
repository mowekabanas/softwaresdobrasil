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

<body class="grey-50">

<div class="Header-wrapper">

	<header class="Header">

		<div class="Header-background"></div>

		<div class="Header-inner">

			<div class="Brand Header-brand">

				<div class="Title Brand-title">

					<h1>

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="Title-selectArea"><?php bloginfo( 'name' ); ?></a>

						<?php

							// descobre se a query atual é uma taxonomia
							if (is_tax()) {

								$current_term = get_queried_object();

								echo ' - ' . $current_term->name;

							}

						?>

					</h1>

				</div>

			</div>

			<?php get_search_form(); ?>

		</div>

	</header>

</div>

<aside class="Aside">

	<div class="Aside-background white"></div>

	<div class="Aside-inner">

		<header class="Aside-header">

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

				<img src="<?php echo get_template_directory_uri() ?>/img/SDBLogo.png" alt="">

				<span>Softwares do Brasil</span>

			</a>

		</header>

		<nav class="Menu Aside-menu">

			<?php

			// descobre se a query atual é uma taxonomia
			if (is_tax())
				$current_term = get_queried_object();

			$terms = get_terms( array(
				'taxonomy' => 'softwares_category',
				'hide_empty' => false,
			) );


			foreach ($terms as $term) {

				if ($term->parent == 0) {

					$term_active_class = '';

					if (isset($current_term))
						if ($current_term->term_id == $term->term_id)
							$term_active_class = 'class="is-active"';

					echo '<dl>';

					echo '<dt>';

					echo '<a href="' . get_term_link($term) . '"' . $term_active_class . ' >';

					echo $term->name;

					echo '</a>';

					echo '</dt>';

					echo '<dd>';

					$term_children = get_terms( array(
						'parent' => $term->term_id,
						'taxonomy' => 'softwares_category',
						'hide_empty' => false,
					) );

					foreach ($term_children as $term_child) {

						if (isset($current_term))
							if ($current_term->term_id == $term_child->term_id)
								$term_child_active_class = 'class="is-active"';

//						echo $term_child->slug;

						echo '<a href="' . get_term_link($term_child) . '" ' . $term_child_active_class . '>';
						echo $term_child->name;
						echo '</a>';

						$term_child_active_class = '';

					}

					echo '</dd>';

					echo '</dl>';

					$term_active_class = '';

				}

			}

			?>

		</nav>

		<footer class="Aside-footer">

			<span>Softwares do Brasil ® <br>Todos direitos reservados</span>

		</footer>

	</div>

</aside>

<div class="Main-wrapper">

<main class="Main">

	<div class="Main-background"></div>

	<div class="Main-inner container">