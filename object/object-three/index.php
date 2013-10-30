<?php 

$page_title = 'Object 3';
$body_class = 'featured object obj-3';
$main_nav = '<nav aria-label="main-menu" role="navigation" id="main-access">
				<ul class="block">
					<li class="sub"><a href="/subject/subject-one/">Subject</a></li>
					<li class="obj active"><a href="/object/object-one/">Object</a></li>
					<li class="cmyk"><a href="/cmyk/cmyk-one">MacOS, CMYK</a></li>
					<li class="nagarjuna"><a href="/nagarjuna/">Nagarjuna and Difference</a></li>
					<li class="dog"><a href="/dog-caterpillar/">Dog/Caterpillar</a></li>
					<li class="spectacle"><a href="/spectacle-and-impermanence/">Spectacle and Impermanence</a></li>
					<li class="im"><a href="/im/al-qur-an/">Illuminated Manuscripts</a></li>
				</ul>
			</nav>';
$specifications = '<aside aria-label="piece-specifications" class="piece-meta">
			<p>Prints using Photoshop to mirror archived photographs of the architecture of <abbr>WWII</abbr> munitions and lab technology.</p>
			<ul class="block">
				<li><span class="assisstive-text">Date of creation: </span>2012</li>
				<li><span class="assisstive-text">Measurements: </span>42 x 45.25in (107 x 115cm)</li>
				<li><span class="assisstive-text">Medium: </span>Injet</li>
			</ul>
		</aside>';
$section_access = '<div role="complementary" class="section-access">
			<nav aria-label="object-menu" role="navigation">
				<ul class="block">
					<li class="obj-1"><a href="/object/object-one/">Object 1</a></li>
					<li class="obj-3 active"><a href="/object/object-three/">Object 3</a></li>
					<li class="obj-6"><a href="/object/object-six/">Object 6</a></li>
					<li class="obj-8"><a href="/object/object-eight/">Object 8</a></li>
					<li class="obj-ins-1"><a href="/object/install-one/">Object 1 Installation</a></li>
					<li class="obj-ins-2"><a href="/object/install-two/">Subject 3, 13, Object 3 Installation</a></li>
				</ul>
			</nav>
		</div><!-- /.section-access -->';
$page_content = '<p class="thumbnail"><a href="http://mattmacintosh.com/images/object/fl/Matt-Macintosh_Object-3_fl.jpg"><img alt="Object 3 Photograph" src="http://mattmacintosh.com/images/object/tb/Matt-Macintosh_Object-3_tb.jpg" /></a></p>';

?><!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7 no-js" lang="en-US"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8 no-js" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9 no-js" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->

<head>

<meta charset="UTF-8" />

<title><?php echo $page_title; ?> &mdash; Matt Macintosh</title>

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
				<div class="site-title block"><a href="/" rel="home">Matt Macintosh</a></div>
			</div><!-- /.branding -->

			<?php echo $main_nav; ?>

		</header>

		<?php echo $specifications; ?>


		<?php echo $section_access; ?>


		<main role="main" id="main-content" class="page-content">

			<article role="article" class="page-entry hentry">

				<header class="entry-header">
					<h1 class="entry-title assisstive-text block"><?php echo $page_title; ?></h1>
				</header><!-- /.entry-header -->

				<div class="entry-content block">

					<?php echo $page_content; ?>


				</div><!-- /.entry-content -->
			</article>

		</main>

		<footer role="contentinfo" class="colophon">

			<nav aria-label="site-information-menu" role="navigation">
				<ul class="nav">
					<li class="first">2009-13 Matt Macintosh</li>
					<li class="contact highlight"><a href="/contact/">Contact</a></li>
					<li class="page-top"><a href="#page-top">Top</a></li>
				</ul>
			</nav>

		</footer>

	</div><!-- /.page-wrap -->

</body>

</html> 