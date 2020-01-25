<?php
/**
 * Theme entry point.
 *
 * @package WordPress
 */
// https://github.com/jaketrent/html-webpack-template/blob/86f285d5c790a6c15263f5cc50fd666d51f974fd/index.html
<% for (var css in htmlWebpackPlugin.files.css) { %>
wp_enqueue_style('.<%= htmlWebpackPlugin.files.css[css] %>.', get_template_directory_uri() . '/dist<%= htmlWebpackPlugin.files.css[css] %>');
<% } %>
<% for (var chunk in htmlWebpackPlugin.files.chunks) { %>
wp_enqueue_script('.<%= htmlWebpackPlugin.files.chunks[chunk].entry %>.', get_template_directory_uri() . '/dist<%= htmlWebpackPlugin.files.chunks[chunk].entry %>', array(), false, true);
<% } %>
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta name="viewport" content="initial-scale=1.0">
	<meta charset="utf-8">
	<?php wp_head(); ?>
</head>
<body>
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PM2S76F" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		<strong>We're sorry but this site doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
	</noscript>
	<div id="app"></div>
	<?php wp_footer(); ?>
</body>
</html>
