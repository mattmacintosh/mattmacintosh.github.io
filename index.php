<?php 

$page_title = 'Matt Macintosh &mdash; More Art Than Art';
$body_class = 'home test';
$main_nav = '<nav aria-label="main-menu" role="navigation" id="main-access">
				<ul class="block">
					<li class="sub"><a href="/subject/subject-one/">Subject</a></li>
					<li class="obj"><a href="/object/object-one/">Object</a></li>
					<li class="cmyk"><a href="/cmyk/cmyk-one">MacOS, CMYK</a></li>
					<li class="nagarjuna"><a href="/nagarjuna/">Nagarjuna and Difference</a></li>
					<li class="dog"><a href="/dog-caterpillar/">Dog/Caterpillar</a></li>
					<li class="spectacle"><a href="/spectacle-and-impermanence/">Spectacle and Impermanence</a></li>
					<li class="im"><a href="/im/al-qur-an/">Illuminated Manuscripts</a></li>
				</ul>
			</nav>';
$page_content = '<p>I am an inter–media artist interested in the ways models of personal emancipation fold into knowledge. Rooted in painting and conceptual art traditions, my practice explores abstraction as a method to re–organize and even consecrate encounters between disciplinary knowledge and identity development.</p>';

?><!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7 no-js" lang="en-US"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8 no-js" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9 no-js" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->

<head>

<meta charset="UTF-8" />

<title><?php echo $page_title; ?></title>

<link type="text/plain" rel="author" href="/humans.txt"/>

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="/apple-touch-icon.png"/>

<link rel="stylesheet" type="text/css" href="/css/style.css" media="all" />

<script type="text/javascript" src="/js/modernizr.js"></script>

</head>

<body id="page-top" class="<?php echo $body_class; ?>">

	<div class="page-wrap hfeed">

		<header role="banner" class="masthead">
			<div class="branding">
				<h1 class="site-title block"><a href="/" rel="home">Matt Macintosh</a></h1>
			</div><!-- /.branding -->

			<?php echo $main_nav; ?>

		</header>

		<main role="main" id="main-content" class="page-content">

			<article role="article" class="page-entry hentry">

				<header class="entry-header">
					<h2 class="entry-title block">About</h2>
				</header><!-- /.entry-header -->

				<div class="entry-content block">

					<?php echo $page_content; ?>


				</div><!-- /.entry-content -->
			</article>

		</main>

		<footer role="contentinfo" class="colophon">

			<nav aria-label="site-information-menu" role="navigation">
				<ul class="nav">
					<li>2009-13 Matt Macintosh</li>
					<li class="contact highlight"><a href="/contact/">Contact</a></li>
					<li class="page-top"><a href="#page-top">Top</a></li>
				</ul>
			</nav>

		</footer>

	</div><!-- /.page-wrap -->

</body>

</html> 