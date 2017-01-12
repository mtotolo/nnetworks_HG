@media print {
	/*
	** MediaWiki Print style sheet for CSS2-capable browsers.
	** Copyright Gabriel Wicke, http://www.aulinx.de/
	**
	** Derived from the plone (http://plone.org/) styles
	** Copyright Alexander Limi
	*/
	
	/* Thanks to A List Apart (http://alistapart.com/) for useful extras */
	a.stub,
	a.new {
		color: #ba0000;
		text-decoration: none;
	}
	
	#toc {
		border: 1px solid #aaaaaa;
		background-color: #f9f9f9;
		padding: 5px;
	}
	.tocindent {
		margin-left: 2em;
	}
	.tocline {
		margin-bottom: 0px;
	}
	
	/* images */
	div.floatright {
		float: right;
		clear: right;
		position: relative;
		margin: 0.5em 0 0.8em 1.4em;
	}
	div.floatright p {
		font-style: italic;
	}
	div.floatleft {
		float: left;
		clear: left;
		position: relative;
		margin: 0.5em 1.4em 0.8em 0;
	}
	div.floatleft p {
		font-style: italic;
	}
	div.center {
		text-align: center;
	}
	
	/* thumbnails */
	div.thumb {
		border: none;
		width: auto;
		margin-top: 0.5em;
		margin-bottom: 0.8em;
		background-color: transparent;
	}
	div.thumbinner {
		border:1px solid #cccccc;
		padding: 3px !important;
		background-color: White;
		font-size: 94%;
		text-align: center;
		overflow: hidden;
	}
	html .thumbimage {
		border: 1px solid #cccccc;
	}
	html .thumbcaption {
		border: none;
		text-align: left;
		line-height: 1.4em;
		padding: 3px !important;
		font-size: 94%;
	}
	
	div.magnify {
		display: none;
	}
	/* @noflip */
	div.tright {
		float: right;
		clear: right;
		margin: 0.5em 0 0.8em 1.4em;
	}
	/* @noflip */
	div.tleft {
		float: left;
		clear: left;
		margin: 0.5em 1.4em 0.8em 0;
	}
	img.thumbborder {
		border: 1px solid #dddddd;
	}
	
	/* table standards */
	table.rimage {
		float: right;
		width: 1pt;
		position: relative;
		margin-left: 1em;
		margin-bottom: 1em;
		text-align: center;
	}
	
	body {
		background: White;
		/*font-size: 11pt !important;*/
		color: Black;
		margin: 0;
		padding: 0;
	}
	
	.noprint,
	div#jump-to-nav,
	div.top,
	div#column-one,
	#colophon,
	.editsection,
	.toctoggle,
	.tochidden,
	div#f-poweredbyico,
	div#f-copyrightico,
	li#viewcount,
	li#about,
	li#disclaimer,
	li#privacy,
	#footer-places,
	#mw-hidden-catlinks {
		/* Hides all the elements irrelevant for printing */
		display: none;
	}
	
	ul {
		list-style-type: square;
	}
	
	#content {
		background: none;
		border: none ! important;
		padding: 0 ! important;
		margin: 0 ! important;
		direction: ltr;
	}
	#footer {
		background : white;
		color : black;
		margin-top: 1em;
		border-top: 1px solid #AAA;
		direction: ltr;
	}
	
	h1, h2, h3, h4, h5, h6 {
		font-weight: bold;
	}
	
	p, .documentDescription {
		margin: 1em 0 ! important;
		line-height: 1.2em;
	}
	
	.tocindent p {
		margin: 0 0 0 0 ! important;
	}
	
	pre {
		border: 1pt dashed black;
		white-space: pre;
		font-size: 8pt;
		overflow: auto;
		padding: 1em 0;
		background: white;
		color: black;
	}
	
	table.listing,
	table.listing td {
		border: 1pt solid black;
		border-collapse: collapse;
	}
	
	a {
		color: Black !important;
		background: none !important;
		padding: 0 !important;
	}
	
	a:link, a:visited {
		color: #520;
		background: transparent;
		text-decoration: underline;
	}
	
	#content a.external.text:after, #content a.external.autonumber:after {
		/* Expand URLs for printing */
		content: " (" attr(href) ") ";
	}
	
	#globalWrapper {
		width: 100% !important;
		min-width: 0 !important;
	}
	
	#content {
		background: white;
		color: black;
	}
	
	#column-content {
		margin: 0 !important;
	}
	
	#column-content #content {
		padding: 1em;
		margin: 0 !important;
	}
	/* MSIE/Win doesn't understand 'inherit' */
	a, a.external, a.new, a.stub {
		color: black ! important;
		text-decoration: none ! important;
	}
	
	/* Continue ... */
	a, a.external, a.new, a.stub {
		color: inherit ! important;
		text-decoration: inherit ! important;
	}
	
	img {
		border: none;
		vertical-align: middle;
	}
	
	/* math */
	span.texhtml { font-family: serif; }
	
	#siteNotice { display: none; }
	
	/* Galleries (see shared.css for more info) */
	li.gallerybox {
		vertical-align: top;
		border: solid 2px white;
		display: -moz-inline-box;
		display: inline-block;
	}
	
	ul.gallery, li.gallerybox {
		zoom: 1;
		*display: inline;
	}
	
	ul.gallery {
		margin: 2px;
		padding: 2px;
		display: block;
	}
	
	li.gallerycaption {
		font-weight: bold;
		text-align: center;
		display: block;
		word-wrap: break-word;
	}
	
	li.gallerybox div.thumb {
		text-align: center;
		border: 1px solid #ccc;
		margin: 2px;
	}
	
	div.gallerytext {
		overflow: hidden;
		font-size: 94%;
		padding: 2px 4px;
		word-wrap: break-word;
	}
	/*
	** Diff rendering
	*/
	table.diff {
		background: white;
	}
	td.diff-otitle {
		background: #ffffff;
	}
	td.diff-ntitle {
		background: #ffffff;
	}
	td.diff-addedline {
		background: #ccffcc;
		font-size: smaller;
		border: solid 2px black;
	}
	td.diff-deletedline {
		background: #ffffaa;
		font-size: smaller;
		border: dotted 2px black;
	}
	td.diff-context {
		background: #eeeeee;
		font-size: smaller;
	}
	.diffchange {
		color: silver;
		font-weight: bold;
		text-decoration: underline;
	}
	
	/*
	** Table rendering
	** As on shared.css but with white background.
	*/
	table.wikitable {
		margin: 1em 1em 1em 0;
		border: 1px #aaa solid;
		background: white;
		border-collapse: collapse;
	}
	.wikitable th, .wikitable td {
		border: 1px #aaa solid;
		padding: 0.2em;
	}
	.wikitable th {
		text-align: center;
		background: white;
		font-weight: bold;
	}
	.wikitable caption {
		font-weight: bold;
	}
	
	a.sortheader {
		margin: 0px 0.3em;
	}
	
	/* Some pagination options */
	.wikitable, .thumb, img {
		page-break-inside: avoid;
	}
	h2, h3, h4, h5, h6, h7 {
		page-break-after: avoid;
	}
	p {
		widows: 3;
		orphans: 3;
	}
	
	/**
	 * Categories
	 */
	.catlinks ul {
		display: inline;
		margin: 0px;
		list-style: none;
		list-style-type: none;
		list-style-image: none;
		vertical-align: middle !ie;
	}
	
	.catlinks li {
		display: inline-block;
		line-height: 1.15em;
		padding: 0 .4em;
		border-left: 1px solid #AAA;
		margin: 0.1em 0;
		zoom: 1;
		display: inline !ie;
	}
	
	.catlinks li:first-child {
		padding-left: .2em;
		border-left: none;
	}
	
	
}
