<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="HeaderSearch Header-search">

	<div class="HeaderSearch-inner">

		<form role="search" method="get" class="HeaderSearch-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<label>
				<input type="search" class="HeaderSearch-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
			</label>
<!--			<button type="submit" class="HeaderSearch-submitButton"><span class="screen-reader-text">--><?php //echo _x( 'Search', 'submit button', 'twentysixteen' ); ?><!--</span></button>-->
			<button type="submit" class="HeaderSearch-submitButton"><span class="screen-reader-text"><span class="HeaderSearch-icon icon-search"></span></span></button>
		</form>

	</div>

</div>