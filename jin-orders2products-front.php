<?php
/**
 * This is the main jin-orders2products-front plugin file, here we do front end work.
 * @author Pedro García <jinglero@gmail.com>
 * @since 0.0.2
 * @package jin-orders2products
 */

if (!defined('ABSPATH'))
	exit; // Exit if accessed directly

echo 'Hello!';


			
/**
 * Función que genera
 * @param  [array] $data Recibe todos los datos necesarios para dibujar el mapa
 * @return [boolean] true: todo ok; false: algo fallo
 */
function jino2p_map($data){

	echo '
	<div id="jin-orders2products" class="container">
		<div class="row">
			<div class="col span_9">
				<div id="gmap-menu"></div>
			</div>
			<div class="col span_3">
				<div id="controls"></div>
			</div>
		</div>
	</div>
	';
}

//Función que llevará el mapa al post, ejecutada desde el tag 'jin-orders2productss'
function jino2p_include($atts){
	//echo "Hola mundillo";
	$data = array();
	jino2p_orders2productss_map($data);
}

//Agrego el tag para incluir el mapa
add_shortcode( 'jin-orders2products', 'jino2p_include' );