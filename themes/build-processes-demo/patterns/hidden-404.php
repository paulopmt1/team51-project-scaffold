<?php
/**
 * Title: Hidden 404
 * Slug: build-processes-demo/hidden-404
 * Inserter: no
 */
?>
<!-- wp:spacer {"height":"var(--wp--preset--spacing--30)"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":1,"align":"wide"} -->
<h1 class="alignwide"><?php echo esc_html_x( '404', 'Error code for a webpage that is not found.', 'build-processes-demo' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","layout":{"type":"default"},"style":{"spacing":{"margin":{"top":"5px"}}}} -->
<div class="wp-block-group alignwide" style="margin-top:5px">
	<!-- wp:paragraph -->
	<p><?php echo esc_html_x( 'This page could not be found.', 'Message to convey that a webpage could not be found', 'build-processes-demo' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'build-processes-demo' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'build-processes-demo' ); ?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e( 'Search', 'build-processes-demo' ); ?>","buttonUseIcon":true,"align":"center"} /-->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var(--wp--preset--spacing--70)"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
