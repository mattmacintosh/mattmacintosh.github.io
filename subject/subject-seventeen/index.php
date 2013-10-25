<?php 

$page_title = 'Subject 17';
$body_class = 'subject sub-17';
$main_nav = '<nav aria-label="main-menu" role="navigation" id="main-access">
				<ul class="block">
					<li class="sub active"><a href="/subject/subject-one/">Subject</a></li>
					<li class="obj"><a href="/object/object-one/">Object</a></li>
					<li class="cmyk"><a href="/cmyk/cmyk-one">MacOS, CMYK</a></li>
					<li class="nagarjuna"><a href="/nagarjuna/">Nagarjuna and Difference</a></li>
					<li class="dog"><a href="/dog-caterpillar/">Dog/Caterpillar</a></li>
					<li class="spectacle"><a href="/spectacle-and-impermanence/">Spectacle and Impermanence</a></li>
					<li class="im"><a href="/im/al-qur-an/">Illuminated Manuscripts</a></li>
				</ul>
			</nav>';
$specifications = '<aside aria-label="piece-specifications" class="piece-meta">
			<p>Life sized images derived from archives photos documenting lab and munitions workers circa <abbr>WWII</abbr>. Lab culture, munitions and associated technology removed.</p>
			<ul class="block">
				<li><span class="assisstive-text">Date of creation: </span>2012</li>
				<li><span class="assisstive-text">Measurements: </span>42 x 45.25in (107 x 115cm)</li>
				<li><span class="assisstive-text">Medium: </span>Injet</li>
			</ul>
		</aside>';
$section_access = '<div role="complementary" class="section-access">
			<nav aria-label="subject-menu" role="navigation">
				<ul class="block">
					<li class="sub-1"><a href="/subject/subject-one/">Subject 1</a></li>
					<li class="sub-2"><a href="/subject/subject-two/">Subject 2</a></li>
					<li class="sub-3"><a href="/subject/subject-three/">Subject 3</a></li>
					<li class="sub-5"><a href="/subject/subject-five/">Subject 5</a></li>
					<li class="sub-12"><a href="/subject/subject-twelve/">Subject 12</a></li>
					<li class="sub-15"><a href="/subject/subject-fifteen/">Subject 15</a></li>
					<li class="sub-16"><a href="/subject/subject-sixteen/">Subject 16</a></li>
					<li class="sub-17 active"><a href="/subject/subject-seventeen/">Subject 17</a></li>
					<li class="sub-18"><a href="/subject/subject-eighteen/">Subject 18</a></li>
					<li class="sub-21"><a href="/subject/subject-twentyone/">Subject 21</a></li>
					<li class="sub-ins-4"><a href="/subject/install-four/">Subject 1, 5, 12 Installation</a></li>
					<li class="sub-ins-3"><a href="/subject/install-three/">Subject 13, 14 Installation</a></li>
					<li class="sub-ins-5"><a href="/subject/install-five/">Subject 7, 8, 9 Installation</a></li>
				</ul>
			</nav>
		</div><!-- /.section-access -->';
$page_content = '<p class="thumbnail"><a href="http://mattmacintosh.com/images/subject/fl/Matt-Macintosh_Subject-17_fl.jpg"><img alt="Subject 17 Photograph" src="http://mattmacintosh.com/images/subject/tb/Matt-Macintosh_Subject-17_tb.jpg" /></a></p>';

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
					<li>2009-13 Matt Macintosh</li>
					<li class="contact highlight"><a href="/contact/">Contact</a></li>
					<li class="page-top"><a href="#page-top">Top</a></li>
				</ul>
			</nav>

		</footer>

	</div><!-- /.page-wrap -->

</body>

</html> 