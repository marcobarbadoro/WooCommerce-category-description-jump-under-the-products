  function salta_sotto_shortcode( $atts, $content = null ) {
	 $GLOBALS['salta_sotto_marco'] = '<div class="descrizione-due">' . $content . '<br></div><br>';

	
}
add_shortcode( 'wcsaltasotto', 'salta_sotto_shortcode' );

function funzione_salta_sotto_marco ( ){
		
	if (isset($GLOBALS['salta_sotto_marco'])) {
 echo  $GLOBALS['salta_sotto_marco'] ;
}

}

add_action( 'woocommerce_after_shop_loop', 'funzione_salta_sotto_marco' );
