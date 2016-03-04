<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
		<?php print $head; ?>
		<title><?php print $head_title; ?></title>
		<?php print $styles; ?>
		<?php print $scripts; ?>

    <link rel="apple-touch-icon" sizes="57x57" href="/KRFC/sites/default/files/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/KRFC/sites/default/files/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/KRFC/sites/default/files/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/KRFC/sites/default/files/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/KRFC/sites/default/files/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/KRFC/sites/default/files/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/KRFC/sites/default/files/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/KRFC/sites/default/files/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/KRFC/sites/default/files/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/KRFC/sites/default/files/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/KRFC/sites/default/files/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/KRFC/sites/default/files/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/KRFC/sites/default/files/favicons/manifest.json">
    <link rel="mask-icon" href="/KRFC/sites/default/files/favicons/safari-pinned-tab.svg" color="#ff0000">
    <link rel="shortcut icon" href="/KRFC/sites/default/files/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="msapplication-TileImage" content="/KRFC/sites/default/files/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="/KRFC/sites/default/files/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ff0000">

	</head>
	<body class="<?php print $classes; ?>" <?php print $attributes;?>>
		<div id="skip-link">
		<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
		</div>
		<?php print $page_top; ?>
		<?php print $page; ?>
		<?php print $page_bottom; ?>
	</body>
</html>
