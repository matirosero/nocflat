<?php

define('EDD_SLUG', 'productos');


function noc_before_pricing() {
	echo '<h3>Escoja una suscripción para su proyecto inmobiliario</h3>
		<p>Añada Llaves Platino, Oro o Plata para colocar su proyecto en una posición preferencial.</p>';
}
add_action( 'edd_before_price_options', 'noc_before_pricing', 10, 3 );
