<?php

// Setup post view
add_action( 'beans_before_load_document', 'trurion_page_setup' );

function trurion_page_setup() {

	beans_remove_action( 'beans_post_title' );
	beans_remove_action( 'beans_post_content' );
	beans_remove_action( 'beans_post_navigation' );

	beans_remove_markup('beans_content');
	beans_remove_markup('beans_post');
	beans_remove_markup('beans_post_header');
	beans_remove_markup('beans_post_body');

}

beans_add_smart_action('beans_primary_prepend_markup', 'trurion_khoahoc');
function trurion_khoahoc() {
	?>
	<div class="uk-panel uk-panel-box" style="border: 1px solid #EDEDED;">	
		
	</div>

<?php
}

beans_load_document();