<?php

/**
 * Register all shortcodes
 *
 * @return null
 */
function register_shortcodes() {
    add_shortcode('pricing-table', 'noc_pricing_table_shortcode');
    add_shortcode('priority-keys-table', 'noc_priority_keys_shortcode');
}
add_action( 'init', 'register_shortcodes' );

/*
 * Pricing table callback
 * - [pricing-table]
 *
 * Returns pricing table html
 */
function noc_pricing_table_shortcode($atts) {

    $table = '<div class="table-outer">
    <table class="pricing-table">

		<colgroup></colgroup>
		<colgroup></colgroup>
		<colgroup></colgroup>
		<colgroup></colgroup>

	    <thead>
	    	<tr>
	    		<th>&nbsp;</th>
	    		<th>
	    			<h3>Paquete Gratuito Default</h3>
	    			<p>$9/tablero por mes</p>
	    		</th>
	    		<th>
	    			<h3>Paquete Básico Noc Noc</h3>
	    			<p>$29/tablero por mes</p>
	    			<!-- <p class="promo">Our most valuable package!</p> -->
	    		</th>
	    		<th>
	    			<h3>Paquete Premium Noc Noc Noc</h3>
	    			<p>$39/tablero por mes</p>
	    		</th>
	    	</tr>
	    </thead>

	    <tfoot>
	    	<tr>
	    		<th>&nbsp;</th>
	    		<td><a href="/productos/paquete-basico-noc/">Más información</a></td>
	    		<td><a href="/productos/paquete-premiun-noc-noc/">Más información</a></td>
	    		<td><a href="/productos/paquete-super-premiun-noc-noc-noc/">Más información</a></td>
	    	</tr>
	    </tfoot>

	    <tbody>
	    	<tr class="table-subcat">
	    		<th>Tablero principal</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
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
	    	<tr>
	    		<th>Descripción corta del proyecto</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr>
	    		<th>Botón de contacto</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr>
	    		<th>Compartir en redes sociales</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr>
	    		<th>Comentarios</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr>
	    		<th>Desarrollador</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr class="table-subcat">
	    		<th>Tablero individual del proyecto</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
	    		<th>Fotografía Ampliada o Video</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td>Fotografía 800x800px</td>
	    		<td>Fotografía 800x1200px o video (YouTube/Vimeo)</td>
	    	</tr>
	    	<tr>
		    	<th>Nombre y logo del proyecto</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr>
		    	<th>Nombre y logo del desarrollador</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Información</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Tipos</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Amenidades</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Tamaños</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Precio</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Financiamiento</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Status, avance o desarrollo</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Fecha de entrega</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Botón de contacto</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Mapa</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Dirección Waze</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Fotografías adicionales</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td>10</td>
	    		<td>20</td>
	    	</tr>

	    	<tr>
		    	<th>PDF Descargable</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr>
		    	<th>Estadísticas de visitación</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr>
		    	<th>Tablero de desarrollador
		    		<br /><a href="#desarrollador">Más información</a>
		    	</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td>Por la suscripción de 4 o más tableros*</td>
	    	</tr>
	    	<tr>
		    	<th>Priority Keys
		    		<br /><a href="#priority-keys">Más información</a>
		    	</th>
		    	<td>Accesibles por $15, $20 o $25</td>
	    		<td>Accesibles por $15, $20 o $25</td>
	    		<td>Accesibles por $15, $20 o $25</td>
	    	</tr>
	    </tbody>

	</table>
	</div>';


    return $table;


}


/*
 * Priority keys table callback
 * - [priority-keys-table]
 *
 * Returns priority keys table html
 */
function noc_priority_keys_shortcode($atts) {

    $table = '<div class="table-outer">
    <table class="pricing-table priority-keys">

		<colgroup></colgroup>
		<colgroup></colgroup>
		<colgroup></colgroup>

	    <thead>
	    	<tr>
	    		<th>
	    			<h3>Llave Platino</h3>
	    			<p>$25/tablero por mes</p>
	    		</th>
	    		<th>
	    			<h3>Llave Oro</h3>
	    			<p>$20/tablero por mes</p>
	    		</th>
	    		<th>
	    			<h3>Llave plata</h3>
	    			<p>$15/tablero por mes</p>
	    		</th>
	    	</tr>
	    </thead>

	    <tfoot>
	    	<tr>
	    		<td colspan="3">Se pueden adquirir al comprar la membresía seleccionada</td>
	    	</tr>
	    </tfoot>

	    <tbody>
	    	<tr class="table-subcat">
		    	<td>Posiciona el proyecto en los primeros lugares de los tableros</td>
	    		<td>Posiciona el proyecto tras proyectos platino en los tableros</td>
	    		<td>Posiciona el proyecto tras proyectos oro los tableros</td>
	    	</tr>

	    </tbody>

	</table>
	</div>';


    return $table;


}