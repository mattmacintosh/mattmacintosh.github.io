<?php 

$page_title = 'Spectacle and Impermanence';
$body_class = 'featured spectacle video';
$main_nav = '<nav aria-label="main-menu" role="navigation" id="main-access">
				<ul class="block">
					<li class="sub"><a href="/subject/subject-one/">Subject</a></li>
					<li class="obj"><a href="/object/object-one/">Object</a></li>
					<li class="cmyk"><a href="/cmyk/cmyk-one">MacOS, CMYK</a></li>
					<li class="nagarjuna"><a href="/nagarjuna/">Nagarjuna and Difference</a></li>
					<li class="dog"><a href="/dog-caterpillar/">Dog/Caterpillar</a></li>
					<li class="spectacle active"><a href="/spectacle-and-impermanence/">Spectacle and Impermanence</a></li>
					<li class="im"><a href="/im/al-qur-an/">Illuminated Manuscripts</a></li>
				</ul>
			</nav>';
$specifications = '<aside aria-label="piece-specifications" class="piece-meta">
			<p>Ann Hamilton\'s corpus frames the potential of the blank page with spectacle and layered sounds. Networked printers mark a modest response, alternately outputting advertising slogans, directional signage and Situationist graffiti on leaves of paper that accumulate to render a main stairway impassable.</p>
			<ul class="block">
						<li><span class="assisstive-text">Date of creation: </span>2011</li>
						<li><span class="assisstive-text">Measurements: </span>Dimensions Variable</li>
						<li><span class="assisstive-text">Mmedium: </span>Printers, paper, computers, inkjet prints, <br />fluorescent light, slides, medical equipment </li>
			</ul>
		</aside>';
$section_access = '<div role="complementary" class="section-access">
			<nav aria-label="illuminated-manuscripts-menu" role="navigation">
				<ul class="block">
					<li class="install active"><a href="/spectacle-and-impermanence/">Installation</a></li>
					<li><a href="/downloads/Sinage.zip">Sinage.zip</a></li>
					<li><a href="/downloads/Advertising-Slogans.zip">Advertising-Slogans.zip/</a></li>
					<li><a href="/downloads/Paris-1968-Grafitti.zip">Paris-1968-Grafitti.zip</a></li>
				</ul>
			</nav>
		</div><!-- /.section-access -->';
$page_content = '<p><iframe src="//player.vimeo.com/video/41506061" width="500" height="369" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></p>

<p><a href="http://mattmacintosh.com/images/si/Matt-Macintosh_Install-1_1000.jpg"><img src="http://mattmacintosh.com/images/si/Matt-Macintosh_Install-1_400.jpg" alt="Photograph of Show Installation" /></a></p>

<p>In this installation, viewers walk through an impressive, if neglected neo-gothic building at the University of Toronto. At the centrepiece staircase, words from the building\'s signage, from advertising slogans, and from the graffiti of the Parisian riots of 1968 are printed on loose-leaf paper that simulates leaves as it falls through the air to the bottom steps. These three sets of performative aphorisms are removed from their \'native\' graphic discourses, formatted identically, and endlessly output from three networked printers.</p>

<p>Less concerned with negation or ironic shifts in meaning, <em>Spectacle and Impermanence</em> is an attempt to isolate out the way the texts refer and relate to each other, and to the viewer. Moreover, it speculates about how texts—particularly those linked to space and architecture—may circulate, direct behaviour, and how they integrate as both meaning-makers and artefacts or souvenirs in experience. The work also attempts to display itself as a sort of late capitalist pleasure-bringer: a staged, theatricalized moment brought to life by things that can be seen, used, collected and discarded. </p>';

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