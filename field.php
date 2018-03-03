<?php
namespace Carbon_Field_Icon;

use Carbon_Fields\Carbon_Fields;

define( 'Carbon_Field_Icon\\VERSION', '2.0.0' );
define( 'Carbon_Field_Icon\\DIR', __DIR__ );


class Icon_Field_Loader {

	public static function init() {

		Carbon_Fields::extend( Icon_Field::class, function ( $container ) {
			return new Icon_Field( $container['arguments']['type'], $container['arguments']['name'], $container['arguments']['label'] );
		} );

	}

}