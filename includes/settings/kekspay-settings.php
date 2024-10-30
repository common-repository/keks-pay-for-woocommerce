<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return apply_filters(
	'wc_kekspay_settings',
	[
		'enabled'                 => [
			'title'    => __( 'Omogući KEKS Pay', 'kekspay' ),
			'type'     => 'checkbox',
			'label'    => __( 'Omogući KEKS Pay metodu plaćanja.', 'kekspay' ),
			'default'  => 'no',
			'desc_tip' => false,
		],
		'title'                   => [
			'title'       => __( 'Naslov', 'kekspay' ),
			'type'        => 'text',
			'description' => __( 'Naslov KEKS Pay metode plaćanja koji korisnik vidi na stranici za naplatu. Upišite: KEKS Pay.', 'kekspay' ),
			'default'     => _x( 'KEKS Pay', 'Title default value', 'kekspay' ),
			'desc_tip'    => true,
		],
		'auth-token'              => [
			'title'       => __( 'Sigurnosni token', 'kekspay' ),
			'type'        => 'title',
			'description' => Kekspay_Data::get_settings_token_field(),
		],
		'webshop-options'         => [
			'title'       => __( 'Podaci o Web trgovini', 'kekspay' ),
			'type'        => 'title',
			'description' => '',
		],
		'webshop-cid'             => [
			'title'       => __( 'CID', 'kekspay' ),
			'type'        => 'text',
			'description' => __( 'Jedinstveni identifikator Web trgovine unutar KEKS Pay sustava. Bit će dodijeljen od strane KEKS Pay sustava.', 'kekspay' ),
			'default'     => '',
			'desc_tip'    => true,
			'required'    => true,
		],
		'webshop-tid'             => [
			'title'       => __( 'TID', 'kekspay' ),
			'type'        => 'text',
			'description' => __( 'Jedinstven identifikator za vrstu usluge unutar Web trgovine. Bit će dodijeljen od strane KEKS Pay sustava.', 'kekspay' ),
			'default'     => '',
			'desc_tip'    => true,
		],
		'webshop-secret-key'      => [
			'title'       => __( 'Tajni ključ', 'kekspay' ),
			'type'        => 'password',
			'description' => __( 'Tajni ključ Web trgovine unutar KEKS Pay sustava. Bit će dodijeljen od strane KEKS Pay sustava.', 'kekspay' ),
			'default'     => '',
			'desc_tip'    => true,
		],
		'test-webshop-cid'        => [
			'title'       => __( 'TEST CID', 'kekspay' ),
			'type'        => 'text',
			'description' => __( 'Jedinstven testni identifikator Web trgovine unutar KEKS Pay sustava. Bit će dodijeljen od strane KEKS Pay sustava.', 'kekspay' ),
			'default'     => '',
			'desc_tip'    => true,
		],
		'test-webshop-tid'        => [
			'title'       => __( 'TEST TID', 'kekspay' ),
			'type'        => 'text',
			'description' => __( 'Jedinstven testni identifikator Web trgovine unutar KEKS Pay sustava. Bit će dodijeljen od strane KEKS Pay sustava.', 'kekspay' ),
			'default'     => '',
			'desc_tip'    => true,
		],
		'test-webshop-secret-key' => [
			'title'       => __( 'TEST Tajni ključ', 'kekspay' ),
			'type'        => 'password',
			'description' => __( 'Testni tajni ključ Web trgovine unutar KEKS Pay sustava. Bit će dodijeljen od strane KEKS Pay sustava.', 'kekspay' ),
			'default'     => '',
			'desc_tip'    => true,
		],
		'advanced-options'        => [
			'title'       => __( 'Dodatne postavke', 'kekspay' ),
			'type'        => 'title',
			'description' => '',
		],
		'payed-order-status'      => [
			'title'       => __( 'Status plaćene narudžbe', 'kekspay' ),
			'type'        => 'select',
			/* translators: order status for payment complete */
			'description' => sprintf( __( 'Status narudžbe koji će biti postavljen nakon što KEKS Pay uspješno izvrši naplatu same narudžbe. (Zadani status je "%s").', 'kekspay' ), _x( 'Processing', 'Order status', 'woocommerce' ) ),
			'default'     => 'wc-processing',
			'options'     => wc_get_order_statuses(),
		],
		'in-test-mode'            => [
			'title'       => __( 'Testni način rada', 'kekspay' ),
			'type'        => 'checkbox',
			'label'       => __( 'Uključi testni način rada.', 'kekspay' ),
			'description' => __( 'Način rada koji omogućava testiranje, ne zaboravite ga ugasiti po završetku testiranja.', 'kekspay' ),
			'default'     => 'no',
			'desc_tip'    => true,
		],
		'use-logger'              => [
			'title'       => __( 'Zapisnik grešaka', 'kekspay' ),
			'type'        => 'checkbox',
			'label'       => __( 'Uključi zapisnik grešaka', 'kekspay' ),
			/* translators: issue logger. */
			'description' => sprintf( __( 'Zapisuje procese i greške pri radu, zapisnik je pohranjen u: %s. Zapisnik može sadržavati osjetljive informacije. Preporučamo korištenje zapisnika samo u svrhe otkrivanja te otklanjanja grešaka te brisanje zapisnika po završetku.', 'kekspay' ), '<code>' . WC_Log_Handler_File::get_log_file_path( 'kekspay' ) . '</code>' ),
			'default'     => 'no',
		],
	]
);
