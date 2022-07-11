<?php get_header(); ?>

<div class="container">
            <header class="page-header">
                <h2 class="entry-title"><?php esc_html_e('404 Not Found', 'rd88-codehex'); ?></h2>
            </header>
            <section>
                <p><?php esc_html_e('Looks like you have taken a wrong turn.....Dont worry... it happens to the best of us.', 'rd88-codehex'); ?></p>
                <?php
		get_search_form(
			array(
				'aria_label' => __( '404 not found', 'rd88-codehex' ),
			)
		);
		?>
            </section>
</div>

<?php get_footer(); ?>