<?php
/**
 * Theme entry point.
 *
 * @package WordPress
 */
<% function getFilename(name) {
	const part = name.split('/').pop();
	const file = part.split('.')[0];

	return file;
}
%>
<% // https://github.com/jaketrent/html-webpack-template/blob/86f285d5c790a6c15263f5cc50fd666d51f974fd/index.html %>
<% for (var css in htmlWebpackPlugin.files.css) { %>
wp_enqueue_style('<%= getFilename(htmlWebpackPlugin.files.css[css]) %>', '<%= htmlWebpackPlugin.files.css[css] %>');
<% } %>
<% for (var js in htmlWebpackPlugin.files.js) { %>
wp_enqueue_script('<%= getFilename(htmlWebpackPlugin.files.js[js]) %>', '<%= htmlWebpackPlugin.files.js[js] %>', array(), false, true);
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
