<?php 

$page_title = 'Nagarjuna and Difference';
$body_class = 'im nagarjuna';
$main_nav = '<nav aria-label="main-menu" role="navigation" id="main-access">
				<ul class="block">
					<li class="sub"><a href="/subject/subject-two/">Subject</a></li>
					<li class="obj"><a href="/object/object-one/">Object</a></li>
					<li class="cmyk"><a href="/cmyk/cmyk-one">MacOS, CMYK</a></li>
					<li class="nagarjuna active"><a href="/nagarjuna/">Nagarjuna and Difference</a></li>
					<li class="dog"><a href="/dog-caterpillar/">Dog/Caterpillar</a></li>
					<li class="spectacle"><a href="/spectacle-and-impermanence/">Spectacle and Impermanence</a></li>
					<li class="im"><a href="/im/al-qur-an/">Illuminated Manuscripts</a></li>
				</ul>
			</nav>';
$specifications = '<aside aria-label="piece-specifications" class="piece-meta">
			<p><a href="http://plato.stanford.edu/entries/nagarjuna/" class="trigger" rel="external">Nagarjuna’s</a> <a  href="/images/nagarjuna/Karik-Presentation-File.zip" class="trigger">Mulamadhyamakakarika</a>, is reorganized into columns containing every occurrence of each distinct word in the text. In a durational performance, each distinct word is calligraphed into a book opened to its middle page and laid on the floor. </p>
			<ul class="block">
				<li><span class="assisstive-text">Date of creation: </span>2011</li>
				<li><span class="assisstive-text">Measurements: </span>Dimensions Variable</li>
				<li><span class="assisstive-text">Medium: </span>Performance, marker, books <br />projector, audio, laptops</li>
			</ul>
		</aside>';
$section_access = '<div role="complementary" class="section-access">
			<nav aria-label="illuminated-manuscripts-menu" role="navigation">
				<ul class="block">
						<li class="install active"><a href="/nagarjuna/">Installation</a></li>
						<li class="mulamad"><a  href="/images/nagarjuna/Karik-Presentation-File.zip">Mulamadhyamakakarika.zip</a></li>
						<li class="sastra"><a title="Isolated words from a commentary on a commentary on a commentary cycle through at a pace just beyond legibility." href="/images/nagarjuna/TEXTCYCLE/">Sastra</a></li>
				</ul>
			</nav>
		</div><!-- /.section-access -->';
$page_content = '<p><a href="http://mattmacintosh.com/images/nagarjuna/Matt-Macintosh_MMK_Install.jpg"><img src="http://mattmacintosh.com/images/nagarjuna/Matt-Macintosh_MMK_Install_266x400.jpg" alt="Installation shot of Mulamadhyamakakarika" /></a></p>

<p>http://www.vimeo.com/26085139</p>

<p><a href="http://mattmacintosh.com/images/nagarjuna/Matt-Macintosh_MMK_Install2_664x1000.jpg"><img src="http://mattmacintosh.com/images/nagarjuna/Matt-Macintosh_MMK_Install2_266x400.jpg" alt="Viewers and performers." /></a></p>

<p><a href="http://mattmacintosh.com/images/nagarjuna/Matt-Macintosh_Book_Scan_1_1000.jpg"><img src="http://mattmacintosh.com/images/nagarjuna/Matt-Macintosh_Book_Scan_1_400.jpg" alt="Books are placed through repeated action." /></a></p>

<p><a href="http://mattmacintosh.com/images/nagarjuna/Matt-Macintosh_MMK_Book2_664x1000.jpg"><img src="http://mattmacintosh.com/images/nagarjuna/Matt-Macintosh_MMK_Book2_266x400.jpg" alt="Books are placed through repeated action." /></a></p>

<p><a href="http://mattmacintosh.com/images/nagarjuna/Matt-Macintosh_MMK_Book1_664x1000.jpg"><img src="http://mattmacintosh.com/images/nagarjuna/Matt-Macintosh_MMK_Book1_266x400.jpg" alt="Books are placed through repeated action." /></a></p>

<p><a href="http://mattmacintosh.com/images/nagarjuna/Matt-Macintosh_Book_Scan_3_1000.jpg"><img src="http://mattmacintosh.com/images/nagarjuna/Matt-Macintosh_Book_Scan_3_400.jpg" alt="Books are placed through repeated action." /></a></p>';

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