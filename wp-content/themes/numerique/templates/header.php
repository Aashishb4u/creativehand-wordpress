<?php
	$beaver_header_ids = class_exists( 'FLThemeBuilderLayoutData' ) ? FLThemeBuilderLayoutData::get_current_page_header_ids() : array();

	if ( empty( $beaver_header_ids ) ) {
		include locate_template( 'templates/header/top.php' );
	} else {
		FLThemeBuilderLayoutRenderer::render_header();
	}

	do_action( 'vamtam_after_top_header' );
<!-- Google tag (gtag.js) -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-5LVS5MKTEE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-5LVS5MKTEE');
    </script>