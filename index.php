<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>Laravel CodeCamp</title>

		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/codecamp2017.css">

		<!-- Theme used for syntax highlighting of code -->
		<link rel="stylesheet" href="lib/css/zenburn.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>
	</head>
	<body>
		<div class="reveal">
			<div class="slides">
				<section>
					<?php include('sections/slide_title.html') ; ?>
				</section>
				<section>
					<?php include('sections/slide_opensource.html') ; ?>
				</section>
				<section>
					<?php include('sections/slide_requirements.html'); ?>
				</section>
				<section>
					<?php include('sections/slide_tools.html') ; ?>
				</section>
				<section data-background="images/when_do_we_start.gif">
				</section>
				<section>
					<?php include('sections/slide_application_overview.html') ; ?>
				</section>
				<section>
					<?php include('sections/slide_installation.html') ; ?>
				</section>
				<section>
					<?php include('sections/slide_laravel_file_structure.html') ; ?>
				</section>
				<section>
					<?php include('sections/slide_apache_vhosts.html') ; ?>
				</section>
				<section>
					<?php include('sections/slide_lets_get_coding.html') ; ?>
				</section>
				<section>
					<?php include('sections/slide_routing.html') ; ?>
				</section>
				<section>
					<?php include('sections/slide_controllers.html') ; ?>
				</section>
				<section>
					<?php include('sections/slide_authentication_quickstart.html') ; ?>
				</section>
				<section>
					<?php include('sections/slide_layout_modification_and_guards.html') ; ?>
				</section>
				<section>
					<?php include('sections/slide_post_controller_and_migration.html') ; ?>
				</section>
				<section>
					<?php include('sections/slide_blog_form.html') ; ?>
				</section>
				<section>
					<?php include('sections/slide_end.html') ; ?>
				</section>
			</div>
		</div>

		<script src="lib/js/head.min.js"></script>
		<script src="js/reveal.js"></script>

		<script>
			// More info https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,

				transition: 'slide', // none/fade/slide/convex/concave/zoom

				// More info https://github.com/hakimel/reveal.js#dependencies
				dependencies: [
					{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: 'plugin/search/search.js', async: true },
					{ src: 'plugin/zoom-js/zoom.js', async: true },
					{ src: 'plugin/notes/notes.js', async: true }
				]
			});
			Reveal.configure({ slideNumber: true });
		</script>
	</body>
</html>
