<?php 

$page_title = 'Abstract 1';
$body_class = 'featured cmyk cmyk-1';
$main_nav = '<nav aria-label="main-menu" role="navigation" id="main-access">
				<ul class="block">
					<li class="sub"><a href="/subject/subject-one/">Subject</a></li>
					<li class="obj"><a href="/object/object-one/">Object</a></li>
					<li class="cmyk active"><a href="/cmyk/cmyk-one">MacOS, CMYK</a></li>
					<li class="nagarjuna"><a href="/nagarjuna/">Nagarjuna and Difference</a></li>
					<li class="dog"><a href="/dog-caterpillar/">Dog/Caterpillar</a></li>
					<li class="spectacle"><a href="/spectacle-and-impermanence/">Spectacle and Impermanence</a></li>
					<li class="im"><a href="/im/al-qur-an/">Illuminated Manuscripts</a></li>
				</ul>
			</nav>';
$specifications = '<aside aria-label="piece-specifications" class="piece-meta">
			<p>Oil paintings made using a projector to precisely imitate each of the eight images contained in the Mac OS desktop image folder named <em>Abstract</em>.</p>
			<ul class="block">
				<li><span class="assisstive-text">Date of creation: </span>2013</li>
				<li><span class="assisstive-text">Measurements: </span>768 x 1024mm</li>
				<li><span class="assisstive-text">Medium: </span>Oil on linen</li>
			</ul>
		</aside>';
$section_access = '<div role="complementary" class="section-access">
			<nav aria-label="abstract-CMYK-menu" role="navigation">
				<ul class="block">
					<li class="cmyk-1 active"><a href="/cmyk/cmyk-one/">Abstract 1</a></li>
					<li class="cmyk-2"><a href="/cmyk/cmyk-two/">Abstract 2</sa></li>
					<li class="cmyk-3"><a href="/cmyk/cmyk-three/">Abstract 3</a></li>
					<li class="cmyk-4"><a href="/cmyk/cmyk-four/">Abstract 4</a></li>
					<li class="cmyk-5"><a href="/cmyk/cmyk-five/">Abstract 5</a></li>
					<li class="cmyk-6"><a href="/cmyk/cmyk-six/">Abstract 6</a></li>
					<li class="cmyk-7"><a href="/cmyk/cmyk-seven/">Abstract 7</a></li>
					<li class="cmyk-8"><a href="/cmyk/cmyk-eight/">Abstract 8</a></li>
				</ul>
			</nav>
		</div><!-- /.section-access -->';
$page_content = '<p class="thumbnail"><img alt="MacOS, Abstract CMYK 1 Photograph" src="http://mattmacintosh.com/images/cmyk/tb/Matt-Macintosh_CMYK-1_tb.jpg" /></p>';

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