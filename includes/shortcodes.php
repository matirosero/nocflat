<?php

/**
 * Register all shortcodes
 *
 * @return null
 */
function register_shortcodes() {
    add_shortcode('pricing-table', 'noc_pricing_table_shortcode');
}
add_action( 'init', 'register_shortcodes' );

/*
 * Pricing table callback
 * - [pricing-table]
 *
 * Returns pricing table html
 */
function noc_pricing_table_shortcode($atts) {
    // global $wp_query,
    //     $post;

    // extract(shortcode_atts(array(
    //     'show' => 10,
    //     'inline' => 'no',
    //     'images' => 'no',
    // ), $atts));


    $table = '<table>

		<colgroup></colgroup>
		<colgroup></colgroup>
		<colgroup></colgroup>
		<colgroup></colgroup>

	    <thead>
	    	<tr>
	    		<th>&nbsp;</th>
	    		<th>
	    			<h3>Paquete Gratuito Default</h3>
	    			<p>¡Gratis!</p>
	    		</th>
	    		<th>
	    			<h3>Paquete Básico Noc Noc</h3>
	    			<p>$29/mes</p>
	    			<!-- <p class="promo">Our most valuable package!</p> -->
	    		</th>
	    		<th>
	    			<h3>Paquete Premium Noc Noc Noc</h3>
	    			<p>$39/mes</p>
	    		</th>
	    	</tr>
	    </thead>

	    <tfoot>
	    	<tr>
	    		<th>&nbsp;</th>
	    		<td><a href="#">Start a free trial</a></td>
	    		<td><a href="#">Start a free trial</a></td>
	    		<td><a href="#">Start a free trial</a></td>
	    	</tr>
	    </tfoot>

	    <tbody>
	    	<tr>
	    		<th>Tablero principal</th>
	    		<td></td>
	    		<td></td>
	    		<td></td>
	    	</tr>
	    	<tr>
	    		<th>Fotografía Personalizada o Video</th>
	    		<td>Fotografía 300x150px</td>
	    		<td>Fotografía 300x300px</td>
	    		<td>Fotografía 300x450px o video (YouTube/Vimeo)</td>
	    	</tr>
	    	<tr>
		    	<th>Nombre del proyecto</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr>
	    		<th>Ubicación</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr>
	    		<th>Tipo de proyecto</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr>
	    		<th>Números telefónicos</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr>
	    		<th>Logo del proyecto</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	</tr>
	    </tbody>

	</table>';


    return $table;


}