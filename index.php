<?php defined( '_JEXEC' ) or die; 

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?><!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<meta name="HandheldFriendly" content="true" />
<meta name="apple-mobile-web-app-capable" content="YES" />

<head>
	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=0.7, maximum-scale=1.0, user-scalable=1" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
	<!-- Le HTML5 shim and media query for IE8 support -->
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script type="text/javascript" src="<?php echo $tpath; ?>/js/respond.min.js"></script>
	<![endif]-->

	<!-- Add Less.js -->
	<link rel="stylesheet/less" type="text/css" href="<?php echo $tpath; ?>/css/template.less" />
	<script src="<?php echo $tpath; ?>/js/less.min.js" type="text/javascript"></script>

</head>
  
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>" role="document">

	<div class="container-fluid">

		<div class="row">
			<header class="col-md-12"><jdoc:include type="modules" name="header" style="xhtml" /></header>
		</div> <!-- end row -->

		<div class="row">
			<nav class="col-md-12"><jdoc:include type="modules" name="menu" style="none" /></nav>
		</div> <!-- end row -->

		<div class="row">
			<article class="col-md-8">
				<jdoc:include type="message" />
				<jdoc:include type="component" />
			</article>
			<aside class="col-md-4"><jdoc:include type="modules" name="right" style="xhtml" /></aside>
		</div> <!-- end row -->

		<div class="row">
			<footer class="col-md-12"><jdoc:include type="modules" name="footer" style="xhtml" /></footer>
		</div> <!-- end row -->

	</div> <!-- end container -->

	<jdoc:include type="modules" name="debug" />
	
</body>

</html>
