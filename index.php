<?php
/**
 * Theme entry point.
 *
 * @package WordPress
 */
// https://github.com/jaketrent/html-webpack-template/blob/86f285d5c790a6c15263f5cc50fd666d51f974fd/index.html

wp_enqueue_style('./css/app.fbae57f2.css.', get_template_directory_uri() . '/dist/css/app.fbae57f2.css');


wp_enqueue_script('./runtime.a0cabde9.js.', get_template_directory_uri() . '/dist/runtime.a0cabde9.js', array(), false, true);

wp_enqueue_script('./js/vendors.28341b11.js.', get_template_directory_uri() . '/dist/js/vendors.28341b11.js', array(), false, true);

wp_enqueue_script('./js/app.353ad510.js.', get_template_directory_uri() . '/dist/js/app.353ad510.js', array(), false, true);

?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta name=viewport content="initial-scale=1">
	<meta charset=utf-8>
	<?php wp_head(); ?>
</head>
<body>
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PM2S76F" height=0 width=0 style=display:none;visibility:hidden></iframe>
		<strong>We're sorry but this site doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
	</noscript>
	<div id=app></div>
	<?php wp_footer(); ?>
</body>
</html>
