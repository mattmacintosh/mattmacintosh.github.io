<?php 

$page_title = 'Dog/Caterpillar';
$body_class = 'im dog';
$main_nav = '<nav aria-label="main-menu" role="navigation" id="main-access">
				<ul class="block">
					<li class="sub"><a href="/subject/subject-two/">Subject</a></li>
					<li class="obj"><a href="/object/object-one/">Object</a></li>
					<li class="cmyk"><a href="/cmyk/cmyk-one">MacOS, CMYK</a></li>
					<li class="nagarjuna"><a href="/nagarjuna/">Nagarjuna and Difference</a></li>
					<li class="dog active"><a href="/dog-caterpillar/">Dog/Caterpillar</a></li>
					<li class="spectacle"><a href="/spectacle-and-impermanence/">Spectacle and Impermanence</a></li>
					<li class="im"><a href="/im/al-qur-an/">Illuminated Manuscripts</a></li>
				</ul>
			</nav>';
$specifications = '<aside aria-label="piece-specifications" class="piece-meta">
			<ul class="block">
				<li><span class="assisstive-text">Date of creation: </span>2011</li>
				<li><span class="assisstive-text">Measurements: </span>Dimensions Variable</li>
				<li><span class="assisstive-text">Medium: </span>Found video, found photos, <br />projectors, inkjet</li>
			</ul>
		</aside>';
$page_content = '<p>This installation consists of three pairs of small-scale images and a large-scale video projection with two-channels looping at different rates.  The video shows a South American centipede birthing itself out of its own exoskeleton and then turning around and eating the very body it has just shed. In the right hand channel, it shows a dog endlessly chasing its own tail. Both of these videos are edited versions of found footage from the internet.</p>

<p>http://vimeo.com/31507385</p>

<p>On the left-hand side of each image pair is factory smoke billowing out of smokestacks from America, Lebanon and Japan. On the right are images from the World Trade Centre collapse, warplanes over Lebanon, and a damaged nuclear reactor in Japan. In all six images, only the smoke clouds and sky have not been digitally removed.</p>

<p><a href="http://mattmacintosh.com/images/dog-caterpillar/detail/Matt-Macintosh-fl-film-still.jpg"><img src="http://mattmacintosh.com/images/dog-caterpillar/Matt-Macintosh-th-film-still.jpg" alt="Video still of a Centipede and a dog chasing its tail." /></a></p>

<p><em>Dog/Caterpillar</em> uses the Debordian Spectacle as a starting point to make propositional images that draw together the practices of knowledge production to the production of capitalist relations. Both self-replicate, facilitate patterns of lack and consumption, and both use techniques like division, isolation and the establishment of types and norms as means of production.</p>

<p><a href="http://mattmacintosh.com/images/dog-caterpillar/detail/Matt-Macintosh-fl-pair-1.jpg"><img src="http://mattmacintosh.com/images/dog-caterpillar/Matt-Macintosh-th-pair-1.jpg" alt="Photos pairing the smoke produced in found images of manufacturing plant smokestacks and "post-democracy" conflict or disaster imagery. (here: September 11 plane crash)" /></a></p>

<p><a href="http://mattmacintosh.com/images/dog-caterpillar/detail/Matt-Macintosh-fl-pair-2.jpg"><img class="spaced" src="http://mattmacintosh.com/images/dog-caterpillar/Matt-Macintosh-th-pair-2.jpg" alt="Photos pairing the smoke produced in found images of manufacturing plant  smokestacks and "post-democracy" conflict or disaster imagery. (here: Lebanese jet-fighters)" /></a></p>

<p><a href="http://mattmacintosh.com/images/dog-caterpillar/detail/Matt-Macintosh-fl-pair-3.jpg"><img src="http://mattmacintosh.com/images/dog-caterpillar/Matt-Macintosh-th-pair-3.jpg" alt="Photos pairing the smoke produced in found images of manufacturing plant smokestacks and \'post-democracy\' conflict or disaster imagery. (here: Japan nuclear reactors after earthquake)" /></a></p>';

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