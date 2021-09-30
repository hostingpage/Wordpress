<?php
	// archivo que muestra un mensaje personalizado en sitios desactivados en Wordpress
?>
<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;
	wp_title( '|', true, 'right' );

	// Agrega el nombre del blog/pagina
	bloginfo( 'name' );

?></title>

<style>
	.content {
		width:500px;
		height:100px;
		margin:0 auto;
		background:#ffffff;
		position:absolute;
		left:50%;
		top:50%;
		margin-left:-250px;
		margin-top:-250px;
		padding: 10px;
	}
	.content p {
		position: relative;
		top: 50%;
		transform: translateY(-50%);
		text-align: center;
		font-size: 22px;
		font-family: 'Helvetica Neue', Verdana, sans-serif;
	}
	a:link,
	a:visited {
		color: #080a26;
		text-decoration: underline;
	}
	a:hover,
	a:active {
		color: #080a26;
		text-decoration: none;
	}
</style>

</head>
<body <?php body_class(); ?>>


	<section class="content">
    	
		<?php _e( '<p>Esta Pagina Web ha sido suspendida, para mas informaci&oacute;n visita <a href="' . network_site_url() . '">Network MutliSitios</a>.', 'compass' ); ?>
		
	</section>

</body>
