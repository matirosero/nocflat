<?php

/**
 * Register all shortcodes
 *
 * @return null
 */
function register_shortcodes() {
    add_shortcode('pricing-table', 'noc_pricing_table_shortcode');
    add_shortcode('presale-table', 'noc_presale_table_shortcode');
    add_shortcode('priority-keys-table', 'noc_priority_keys_shortcode');
}
add_action( 'init', 'register_shortcodes' );


/*
 * Presale table callback
 * - [presale-table]
 *
 * Returns presale table html
 */
function noc_presale_table_shortcode($atts) {
    $table = '<div class="table-outer">
    <table class="pricing-table presale">

		<colgroup></colgroup>
		<colgroup></colgroup>
		<colgroup></colgroup>

	    <thead>
	    	<tr>
	    		<th>
	    			<h3>Paquete Básico Noc</h3>
	    			<p>$69 mensuales 2+4
	    				<br />Ahorra $228</p>
	    		</th>
	    		<th>
	    			<h3>Paquete Premium Noc Noc</h3>
	    			<p>$169 mensuales 5+4
	    			<br />Ahorra $318</p>
	    			<!-- <p class="promo">Our most valuable package!</p> -->
	    		</th>
	    		<th>
	    			<h3>Paquete Super Premium Noc Noc Noc</h3>
	    			<p>$189 mensuales 10+4
	    			<br />Ahorra $488</p>
	    		</th>
	    	</tr>
	    </thead>

	    <tfoot>
	    	<tr>
	    		<td><a href="/productos/paquete-basico-noc/">Más información</a></td>
	    		<td><a href="/productos/paquete-premiun-noc-noc/">Más información</a></td>
	    		<td><a href="/productos/paquete-super-premiun-noc-noc-noc/">Más información</a></td>
	    	</tr>
	    </tfoot>

	    <tbody>
	    	<tr class="table-subcat">

		    	<td>
		    		<ul>
						<li>Participación en la guía digital Nocnocquienes.com en dos tableros de su elección (marzo 2018)</li>
						<li>Participación en Nocnoc en 4 tableros gratis (marzo 2018)</li>
						<li>1 publicación mensual en FB de Nocnoc por 4 meses (diciembre, enero, febrero, marzo)</li>
						<li>Llave plata para participar en las terceras posiciones de cada tablero. </li>

		    		</ul>
		    	</td>

	    		<td>
		    		<ul>
						<li>Participación en Nocnocquienes.com en cinco tableros de su elección (marzo 2018)</li>
						<li>Participación en Nocnocquienes.com en 4 tableros gratis (marzo 2018)</li>
						<li>2 publicaciones mensuales en FB de Nocnoc por 4 meses (diciembre, enero, febrero, marzo)</li>
						<li>1 artículo patrocinado en FB.
						<li>Llave oro para participar en las segundas posiciones de cada tablero.</li>

		    		</ul>
	    		</td>

	    		<td>
		    		<ul>
						<li>Participación en Nocnoc en diez tableros de su elección (marzo 2018)</li>
						<li>Participación en Nocnoc en 4 tableros gratis (marzo 2018)</li>
						<li>4 publicaciones mensuales en FB de Nocnoc por 3 meses (diciembre, enero, febrero, marzo)</li>
						<li>2 artículos patrocinados en FB.</li>
						<li>Llave platinum para participar en las primeras posiciones de cada tablero.</li>

		    		</ul>
	    		</td>
	    	</tr>
	    </tbody>	    
	</table>
	</div>';


    return $table;
}


/*
 * Pricing table callback
 * - [pricing-table]
 *
 * Returns pricing table html
 */
function noc_pricing_table_shortcode($atts) {

    $table = '<div class="table-outer">
    <table class="pricing-table paquetes">

		<colgroup></colgroup>
		<colgroup></colgroup>
		<colgroup></colgroup>
		<colgroup></colgroup>

	    <thead>
	    	<tr>
	    		<th>&nbsp;</th>
	    		<th>
	    			<h3>Paquete Básico Noc</h3>
	    			<p>$69 por mes</p>
	    		</th>
	    		<th>
	    			<h3>Paquete Básico Noc Noc</h3>
	    			<p>$169 por mes</p>
	    			<!-- <p class="promo">Our most valuable package!</p> -->
	    		</th>
	    		<th>
	    			<h3>Paquete Premium Noc Noc Noc</h3>
	    			<p>$189 por mes</p>
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
	    	<tr class="table-subcat">
	    		<th>Tableros adicionales a escoger</th>
		    	<td>2</td>
	    		<td>5</td>
	    		<td>10</td>
	    	</tr>
	    	<tr class="table-subcat">
	    		<th>Página individual del proyecto</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr>
		    	<th>Tablero de desarrollador
		    		<br /><a href="#desarrollador">Más información</a>
		    	</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
	    		<th class="table-divider" colspan="4">En tableros </th>
	    	</tr>

	    	<tr>
	    		<th>Fotografía Personalizada o Video</th>
	    		<td>Fotografía 300x150px</td>
	    		<td>Fotografía 300x300px o video (YouTube/Vimeo)</td>
	    		<td>Fotografía 300x450px o video (YouTube/Vimeo)</td>
	    	</tr>
	    	<tr>
		    	<th>Nombre del proyecto</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr>
	    		<th>Logo del proyecto</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr>
	    		<th>Desarrollador</th>
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
	    		<th>Descripción corta del proyecto</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
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
	    		<th class="table-divider" colspan="4">En la página individual del proyecto </th>
	    	</tr>

	    	<tr>
	    		<th>Fotografía Ampliada o Video</th>
		    	<td>Fotografía 800x400 px</td>
	    		<td>Fotografía 800x800 px o video (YouTube/Vimeo)</td>
	    		<td>Fotografía 800x1200 px o video (YouTube/Vimeo)</td>
	    	</tr>
	    	<tr>
		    	<th>Nombre y logo del proyecto</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr>
		    	<th>Nombre y logo del desarrollador</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Información</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Tipos</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Amenidades</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Tamaños</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Precio</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Financiamiento</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Status, avance o desarrollo</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>

	    	<tr>
		    	<th>Fecha de entrega</th>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
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
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
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
		    	<td>5</td>
	    		<td>10</td>
	    		<td>20</td>
	    	</tr>';

	    	/*
	    	$table .= '<tr>
		    	<th>PDF Descargable</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
		    	<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>
	    	<tr>
		    	<th>Estadísticas de visitación</th>
		    	<td><i class="fa fa-times" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    		<td><i class="fa fa-check" aria-hidden="true"></i></td>
	    	</tr>';
	    	*/

	    	$table .= '<tr>
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