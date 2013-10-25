<?php 

$page_title = 'Al Qur\'an';
$body_class = 'im al-q';
$main_nav = '<nav aria-label="main-menu" role="navigation" id="main-access">
				<ul class="block">
					<li class="sub"><a href="/subject/subject-two/">Subject</a></li>
					<li class="obj"><a href="/object/object-one/">Object</a></li>
					<li class="cmyk"><a href="/cmyk/cmyk-one">MacOS, CMYK</a></li>
					<li class="nagarjuna"><a href="/nagarjuna/">Nagarjuna and Difference</a></li>
					<li class="dog"><a href="/dog-caterpillar/">Dog/Caterpillar</a></li>
					<li class="spectacle"><a href="/spectacle-and-impermanence/">Spectacle and Impermanence</a></li>
					<li class="im active"><a href="/im/al-qur-an/">Illuminated Manuscripts</a></li>
				</ul>
			</nav>';
$specifications = '<aside aria-label="piece-specifications" class="piece-meta">
			<p class="block">Complete foundational texts are re-formatted as monochromes and printed on cellulose. They are buried underground on the last day of Fall 2012 (Dec 20), and will be exhumed on the first day of Winter 2013 (Dec 21).</p>
			<ul class="block">
				<li><span class="assisstive-text">Date of creation: </span>Ongoing</li>
				<li><span class="assisstive-text">Measurements: </span>44 x 75in (112cm x 183cm)</li>
				<li><span class="assisstive-text">Medium: </span>Injet</li>
			</ul>
		</aside>';
$section_access = '<div role="complementary" class="section-access">
			<nav aria-label="illuminated-manuscripts-menu" role="navigation">
				<ul class="block">
					<li class="al-q active"><a href="/im/al-qur-an/">Al Qur\'an</a></li>
					<li class="gita"><a href="/im/bhagavad-gita/">Bhagavad Gita</a></li>
					<li class="crest"><a href="/im/crest-jewel-of-discrimination/">Crest Jewel of Discrimination</a></li>
					<li class="critique"><a href="/im/critique-of-pure-reason/">Critique of Pure Reason</a></li>
					<li class="docta"><a href="/im/de-docta-ignorantia/">De Docta Ignorantia</a></li>
					<li class="ming"><a href="/im/hsin-hsin-ming/">Hsin Hsin Ming</a></li>
					<li class="mula"><a href="/im/mulamadhyamakakarika/">Mūlamadhyamakakārikā</a></li>
					<li class="new-test"><a href="/im/new-testament/">New Testament</a></li>
					<li class="old-test"><a href="/im/old-testament/">Old Testament</a></li>
					<li class="spirit"><a href="/im/phenomenology-of-spirit/">Phenomenology Of Spirit</a></li>
					<li class="invest"><a href="/im/philosophical-investigations/">Philosophical Investigations</a></li>
					<li class="yoga"><a href="/im/synthesis-of-yoga/">Synthesis of Yoga</a></li>
					<li class="tao-te"><a href="/im/tao-te-ching/">Tao Te Ching</a></li>
					<li class="shads"><a href="/im/upanishads/">Upanishads</a></li>
				</ul>
			</nav>
		</div><!-- /.section-access -->';
$page_content = '<p class="thumbnail"><img src="http://mattmacintosh.com/images/im/Matt-Macintosh-th-Al-Quran.jpg" alt="Al Qur\'an Photograph"/></p>';

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