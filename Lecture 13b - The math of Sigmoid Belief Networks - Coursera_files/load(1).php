@media screen {
	/**
	 * CSS in this file is used by *all* skins (that have any CSS at all).  Be
	 * careful what you put in here, since what looks good in one skin may not in
	 * another, but don't ignore the poor pre-Monobook users either.
	 */
	
	/* GENERAL CLASSES FOR DIRECTIONALITY SUPPORT */
	/* These classes should be used for text depending on the content direction.
	Content stuff like editsection, ul/ol and TOC depend on this. */
	 /* @noflip */.mw-content-ltr { direction: ltr; }
	/* @noflip */.mw-content-rtl { direction: rtl; }
	/* Most input fields should be in site direction */
	/* @noflip */.sitedir-ltr textarea, .sitedir-ltr input { direction: ltr; }
	/* @noflip */.sitedir-rtl textarea, .sitedir-rtl input { direction: rtl; }
	/* Input types that should follow user direction, like buttons */
	input[type="submit"], input[type="button"], input[type="reset"], input[type="file"] { direction: ltr; }
	/* Override default values */
	/* @noflip */textarea[dir="ltr"], input[dir="ltr"] { direction: ltr; }
	/* @noflip */textarea[dir="rtl"], input[dir="rtl"] { direction: rtl; }
	
	/* Default style for semantic tags */
	abbr, acronym, .explain {
		border-bottom: 1px dotted black;
		cursor: help;
	}
	
	/* Colored watchlist and recent changes numbers */
	.mw-plusminus-pos { color: #006400; } /* dark green */
	.mw-plusminus-neg { color: #8b0000; } /* dark red */
	.mw-plusminus-null { color: #aaa; } /* gray */
	
	/* Links to redirects appear italicized on [[Special:AllPages]], [[Special:PrefixIndex]],
	   [[Special:Watchlist/edit]] and in category listings */
	.allpagesredirect, .redirect-in-category, .watchlistredir {
		font-style: italic;
	}
	
	
	/* Comment and username portions of RC entries */
	span.comment {
		font-style: italic;
	}
	
	span.changedby {
		font-size: 95%;
	}
	
	/* Math */
	.texvc {
		direction: ltr;
		unicode-bidi: embed;
	}
	img.tex { vertical-align: middle; }
	span.texhtml { font-family: serif; }
	
	/* add a bit of margin space between the preview and the toolbar */
	/* this replaces the ugly <p><br /></p> we used to insert into the page source */
	#wikiPreview.ontop { margin-bottom: 1em; }
	
	/* Stop floats from intruding into edit area in previews */
	#editform, #toolbar, #wpTextbox1 {
		clear: both;
	}
	#toolbar img {
		cursor: pointer;
	}
	div#mw-js-message {
		margin: 1em 5%;
		padding: 0.5em 2.5%;
		border: solid 1px #ddd;
		background-color: #fcfcfc;
	}
	
	/* Edit section links */
	.editsection {
		float: right;
		margin-left: 5px;
	}
	/* Correct directionality when page dir is different from site/user dir */
	/* @noflip */.mw-content-ltr .editsection, .mw-content-rtl .mw-content-ltr .editsection { float: right; }
	/* @noflip */.mw-content-rtl .editsection, .mw-content-ltr .mw-content-rtl .editsection { float: left; }
	/**
	 * File histories
	 */
	h2#filehistory {
		clear: both;
	}
	
	table.filehistory th,
	table.filehistory td {
		vertical-align: top;
	}
	table.filehistory th {
		text-align: left;
	}
	table.filehistory td.mw-imagepage-filesize,
	table.filehistory th.mw-imagepage-filesize {
		white-space: nowrap;
	}
	
	table.filehistory td.filehistory-selected {
		font-weight: bold;
	}
	
	/*
	 * rev_deleted stuff
	 */
	li span.deleted, span.history-deleted {
		text-decoration: line-through;
		color: #888;
		font-style: italic;
	}
	
	/**
	 * Patrol stuff
	 */
	.not-patrolled {
		background-color: #ffa;
	}
	
	.unpatrolled {
		font-weight: bold;
		color: red;
	}
	
	div.patrollink {
		font-size: 75%;
		text-align: right;
	}
	
	/**
	 * Forms
	 */
	td.mw-label { text-align: right; }
	td.mw-input { text-align: left; }
	td.mw-submit { text-align: left; }
	
	td.mw-label { vertical-align: top; }
	.prefsection td.mw-label { width: 20%; }
	.prefsection table { width: 100%; }
	td.mw-submit { white-space: nowrap; }
	
	table.mw-htmlform-nolabel td.mw-label {
		width: 0 !important;
	}
	
	tr.mw-htmlform-vertical-label td.mw-label {
		text-align: left !important;
	}
	
	.mw-htmlform-invalid-input td.mw-input input {
		border-color: red;
	}
	.mw-htmlform-multiselect-flatlist div.mw-htmlform-multiselect-item {
		display: inline;
		margin-right: 1em;
		white-space: nowrap;
	}
	
	input#wpSummary {
		width: 80%;
	}
	
	/**
	 * Image captions
	 */
	.thumbcaption { text-align: left; }
	.magnify { float: right; }
	
	/**
	 * Categories
	 */
	#catlinks {
		/**
		 * Overrides text justification (user preference)
		 * See bug 31990
		 */
		text-align: left;
	}
	#catlinks ul {
		display:inline;
		margin: 0px;
		padding: 0px;
		list-style: none;
		list-style-type: none;
		list-style-image: none;
		vertical-align: middle !ie;
	}
	
	#catlinks li {
		display:inline-block;
		line-height: 1.35em;
		padding: 0 .7em;
		border-left: 1px solid #AAA;
		margin: 0.3em 0;
		zoom: 1;
		display:inline !ie;
	}
	
	#catlinks li:first-child {
		padding-left: .4em;
		border-left: none;
	}
	/**
	 * Hidden categories
	 */
	.mw-hidden-cats-hidden { display: none; }
	.catlinks-allhidden { display: none; }
	
	/* Convenience links to edit block, delete and protect reasons */
	p.mw-ipb-conveniencelinks, p.mw-protect-editreasons,
	p.mw-filedelete-editreasons, p.mw-delete-editreasons,
	p.mw-revdel-editreasons {
		font-size: 90%;
		text-align: right;
	}
	
	/*
	 * OpenSearch ajax suggestions
	 */
	.os-suggest {
		overflow: auto;
		overflow-x: hidden;
		position: absolute;
		top: 0px;
		left: 0px;
		width: 0px;
		background-color: white;
		background-color: Window;
		border-style: solid;
		border-color: #AAAAAA;
		border-width: 1px;
		z-index:99;
		font-size:95%;
	}
	
	table.os-suggest-results {
		font-size: 95%;
		cursor: pointer;
		border: 0;
		border-collapse: collapse;
		width: 100%;
	}
	
	.os-suggest-result, .os-suggest-result-hl {
		white-space: nowrap;
		background-color: white;
		background-color: Window;
		color: black;
		color: WindowText;
		padding: 2px;
	}
	.os-suggest-result-hl,
	.os-suggest-result-hl-webkit {
		background-color: #4C59A6;
		color: white;
	}
	.os-suggest-result-hl {
		/* System colors are misimplemented in Safari 3.0 and earlier,
		   making highlighted text illegible... */
		background-color: Highlight;
		color: HighlightText;
	}
	
	.os-suggest-toggle {
		position: relative;
		left: 1ex;
		font-size: 65%;
	}
	.os-suggest-toggle-def {
		position: absolute;
		top: 0px;
		left: 0px;
		font-size: 65%;
		visibility: hidden;
	}
	
	/* Page history styling */
	/* the auto-generated edit comments */
	.autocomment { color: gray; }
	#pagehistory .history-user {
		margin-left: 0.4em;
		margin-right: 0.2em;
	}
	#pagehistory span.minor {
		font-weight: bold;
	}
	#pagehistory li {
		border: 1px solid white;
	}
	#pagehistory li.selected {
		background-color: #f9f9f9;
		border: 1px dashed #aaa;
	}
	
	.mw-history-revisiondelete-button, #mw-fileduplicatesearch-icon {
		float: right;
	}
	
	/** Generic minor/bot/newpage styling */
	.newpage, .minor, .bot {
		font-weight: bold;
	}
	
	#shared-image-dup, #shared-image-conflict {
		font-style: italic;
	}
	
	/*
	 * Recreating deleted page warning
	 * Reupload file warning
	 * Page protection warning
	 * incl. log entries for these warnings
	 */
	div.mw-warning-with-logexcerpt {
		padding: 3px;
		margin-bottom: 3px;
		border: 2px solid #2F6FAB;
		clear: both;
	}
	div.mw-warning-with-logexcerpt ul li {
		font-size: 90%;
	}
	
	/* (show/hide) revision deletion links */
	span.mw-revdelundel-link,
	strong.mw-revdelundel-link {
		font-size: 90%;
	}
	span.mw-revdelundel-hidden,
	input.mw-revdelundel-hidden {
		visibility: hidden;
	}
	
	td.mw-revdel-checkbox, th.mw-revdel-checkbox {
		padding-right: 10px;
		text-align: center;
	}
	
	/* feed links */
	a.feedlink {
		background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAABmJLR0QA/wD/AP+gvaeTAAAAB3RJTUUH2AkOCjkSL9xYhAAAAc9JREFUKJE90LFrU1EYQPHzffe+l/iSVkXTmNiANBU7iE5OLrbSVYKIiy5dnARB3FwEB5dOOhQKuthJEEHRsUXBoosO0lKKEYRa29LWQk3S5L53r0PVv+D8OPJlolrrr1ZmI7F1BFEjqBXECGJAjSBCaLddc7u5Mmb7q5U5007rWh5E9rYR/xsTBBXBWMVEglqRpGiGhcE5G6kdyugxcGsGyRdJ15ZwC29IF55jNEWt8K+aFOMhc+dC7Z6SITjC7ga2MkI8cpH41Dhh7RPa20Gt4toZac+IqhFMTpG0hVt8RetJg967SaTvGLnGNKZ0EtfOcB1P5jyqVjCRkIzfpnjtMYXrT2FrCff6JqhFRx/gnCXtZHgXUFHQSGg/u4Gbf4T2lYkvTaFGce8fIgePY09fwXU8Pg3sk2JFu5v4lQ+4FxPge+j5u3Q+v8TvrBKfbZB1PT4LqJh9Uv7yFLmrM2i+gPs4jRyqIaUz7C2+xZZOEA4cJaSgaAhqhbC1DK0N3K9NusvzAHB4GLf+HQBJBsiCD7J6/9zXI2VbVyv/b6Sdv1e6nrTryboB7wVbyjXt1rcfo0Frs4UkqvtUJHMBjyVEAcSjFiQJwRvf3F3/OfYH/dDFWrCooaIAAAAASUVORK5CYII=) center left no-repeat;
		background: url(https://share.coursera.org/wiki/skins/common/images/feed-icon.png?2012-03-06T00:55:00Z) center left no-repeat!ie;
		padding-left: 16px;
	}
	
	/* Plainlinks - this can be used to switch
	 * off special external link styling */
	.plainlinks a {
		background: none !important;
		padding: 0 !important;
	}
	/* External URLs should always be treated as LTR (bug 4330) */
	/* @noflip */ .rtl a.external.free, .rtl a.external.autonumber {
		direction: ltr;
		unicode-bidi: embed;
	}
	
	/* wikitable class for skinning normal tables
	 * keep on sync with commonPrint.css
	 */
	table.wikitable {
		margin: 1em 1em 1em 0;
		background: #f9f9f9;
		border: 1px #aaa solid;
		border-collapse: collapse;
		color: black;
	}
	.wikitable th, .wikitable td {
		border: 1px #aaa solid;
		padding: 0.2em;
	}
	.wikitable th {
		background: #f2f2f2;
		text-align: center;
	}
	.wikitable caption {
		font-weight: bold;
	}
	
	/* hide initially collapsed collapsable tables */
	table.collapsed tr.collapsable {
		display: none;
	}
	
	/* success and error messages */
	.success {
		color: green;
		font-size: larger;
	}
	.warning {
		color: #FFA500; /* orange */
		font-size: larger;
	}
	.error {
		color: red;
		font-size: larger;
	}
	.errorbox, .warningbox, .successbox {
		font-size: larger;
		border: 2px solid;
		padding: .5em 1em;
		float: left;
		margin-bottom: 2em;
		color: #000;
	}
	.errorbox {
		border-color: red;
		background-color: #fff2f2;
	}
	.warningbox {
		border-color: #FF8C00; /* darkorange */
		background-color: #FFFFC0;
	}
	.successbox {
		border-color: green;
		background-color: #dfd;
	}
	.errorbox h2, .warningbox h2, .successbox h2 {
		font-size: 1em;
		font-weight: bold;
		display: inline;
		margin: 0 .5em 0 0;
		border: none;
	}
	
	/* general info/warning box for SP */
	.mw-infobox {
		border: 2px solid #ff7f00;
		margin: 0.5em;
		clear: left;
		overflow: hidden;
	}
	
	.mw-infobox-left {
		margin: 7px;
		float: left;
		width: 35px;
	}
	
	.mw-infobox-right {
		margin: 0.5em 0.5em 0.5em 49px;
	}
	
	/* Note on preview page */
	.previewnote {
		color: #c00;
		margin-bottom: 1em;
	}
	
	.previewnote p {
		text-indent: 3em;
		margin: 0.8em 0;
	}
	
	.visualClear {
		clear: both;
	}
	
	#mw_trackbacks {
		border: solid 1px #bbbbff;
		background-color: #eeeeff;
		padding: 0.2em;
	}
	
	/*
		Table pager (e.g. Special:ListFiles)
		- remove underlines from the navigation link
		- collapse borders
		- set the borders to outsets (similar to Special:AllMessages)
		- remove line wrapping for all td and th, set background color
		- restore line wrapping for the last two table cells (description and size)
	*/
	.TablePager {
		min-width: 80%;
		border-collapse: collapse;
	}
	.TablePager_nav {
		margin: 0 auto;
	}
	.TablePager_nav td {
		padding: 3px;
		text-align: center;
	}
	.TablePager_nav a {
		text-decoration: none;
	}
	.TablePager, .TablePager td, .TablePager th {
		border: 1px solid #aaaaaa;
		padding: 0 0.15em 0 0.15em;
	}
	.TablePager th {
		background-color: #eeeeff;
	}
	.TablePager td {
		background-color: #ffffff;
	}
	.TablePager tr:hover td {
		background-color: #eeeeff;
	}
	
	.imagelist td, .imagelist th {
		white-space: nowrap;
	}
	.imagelist .TablePager_col_links {
		background-color: #eeeeff;
	}
	.imagelist .TablePager_col_img_description {
		white-space: normal;
	}
	.imagelist th.TablePager_sort {
		background-color: #ccccff;
	}
	
	/* filetoc */
	ul#filetoc {
		text-align: center;
		border: 1px solid #aaaaaa;
		background-color: #f9f9f9;
		padding: 5px;
		font-size: 95%;
		margin-bottom: 0.5em;
		margin-left: 0;
		margin-right: 0;
	}
	
	#filetoc li {
		display: inline;
		list-style-type: none;
		padding-right: 2em;
	}
	
	/* Classes for EXIF data display */
	table.mw_metadata {
		font-size: 0.8em;
		margin-left: 0.5em;
		margin-bottom: 0.5em;
		width: 400px;
	}
	
	table.mw_metadata caption {
		font-weight: bold;
	}
	
	table.mw_metadata th {
		font-weight: normal;
	}
	
	table.mw_metadata td {
		padding: 0.1em;
	}
	
	table.mw_metadata {
		border: none;
		border-collapse: collapse;
	}
	
	table.mw_metadata td, table.mw_metadata th {
		text-align: center;
		border: 1px solid #aaaaaa;
		padding-left: 5px;
		padding-right: 5px;
	}
	
	table.mw_metadata th {
		background-color: #f9f9f9;
	}
	
	table.mw_metadata td {
		background-color: #fcfcfc;
	}
	
	table.mw_metadata ul.metadata-langlist {
		list-style-type: none;
		list-style-image: none;
		padding-right: 5px;
		padding-left: 5px;
		margin: 0;
	}
	
	/* Correct directionality when page dir is different from site/user dir */
	.mw-content-ltr ul,
	.mw-content-rtl .mw-content-ltr ul {
		/* @noflip */
		margin: 0.3em 0 0 1.5em;
		padding: 0;
	}
	.mw-content-rtl ul,
	.mw-content-ltr .mw-content-rtl ul {
		/* @noflip */
		margin: 0.3em 1.5em 0 0;
		padding: 0;
	}
	.mw-content-ltr ol,
	.mw-content-rtl .mw-content-ltr ol {
		/* @noflip */
		margin: 0.3em 0 0 3.2em;
		padding: 0;
	}
	.mw-content-rtl ol,
	.mw-content-ltr .mw-content-rtl ol {
		/* @noflip */
		margin: 0.3em 3.2em 0 0;
		padding: 0;
	}
	
	/* Correct directionality when page dir is different from site/user dir */
	/* @noflip */.mw-content-ltr ul, .mw-content-rtl .mw-content-ltr ul {
		margin: .3em 0 0 1.5em;
	}
	/* @noflip */.mw-content-rtl ul, .mw-content-ltr .mw-content-rtl ul {
		margin: .3em 1.5em 0 0;
	}
	/* @noflip */.mw-content-ltr ol, .mw-content-rtl .mw-content-ltr ol {
		margin: .3em 0 0 3.2em;
	}
	/* @noflip */.mw-content-rtl ol, .mw-content-ltr .mw-content-rtl ol {
		margin: .3em 3.2em 0 0;
	}
	
	/* Galleries */
	/* These display attributes look nonsensical, but are needed to support IE and FF2 */
	/* Don't forget to update commonPrint.css */
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
		background-color: #f9f9f9;
		margin: 2px;
	}
	
	li.gallerybox div.thumb img {
		display: block;
		margin: 0 auto;
	}
	
	div.gallerytext {
		overflow: hidden;
		font-size: 94%;
		padding: 2px 4px;
		word-wrap: break-word;
	}
	
	.mw-ajax-loader {
		background-image: url(data:image/gif;base64,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);
		background-image: url(https://share.coursera.org/wiki/skins/common/images/ajax-loader.gif?2012-03-06T00:55:00Z)!ie;
		background-position: center center;
		background-repeat: no-repeat;
		padding: 16px;
		position: relative;
		top: -16px;
	}
	
	.mw-small-spinner {
		padding: 10px !important;
		margin-right: 0.6em;
		background-image: url(data:image/gif;base64,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);
		background-image: url(https://share.coursera.org/wiki/skins/common/images/spinner.gif?2012-03-06T00:55:00Z)!ie;
		background-position: center center;
		background-repeat: no-repeat;
	}
	
	/* Localised ordered list numbering for some languages */
	ol:lang(bcc) li,
	ol:lang(bqi) li,
	ol:lang(fa) li,
	ol:lang(glk) li,
	ol:lang(kk-arab) li,
	ol:lang(mzn) li {
		list-style-type: -moz-persian;
		list-style-type: persian;
	}
	
	ol:lang(ckb) li {
		list-style-type: -moz-arabic-indic;
		list-style-type: arabic-indic;
	}
	
	ol:lang(as) li,
	ol:lang(bn) li {
		list-style-type: -moz-bengali;
		list-style-type: bengali;
	}
	
	ol:lang(or) li {
		list-style-type: -moz-oriya;
		list-style-type: oriya;
	}
	
	#toc ul, .toc ul {
		margin: .3em 0;
	}
	
	/* Correct directionality when page dir is different from site/user dir */
	/* @noflip */.mw-content-ltr .toc ul, .mw-content-ltr #toc ul,
	.mw-content-rtl .mw-content-ltr .toc ul, .mw-content-rtl .mw-content-ltr #toc ul {
		text-align: left;
	}
	/* @noflip */.mw-content-rtl .toc ul, .mw-content-rtl #toc ul,
	.mw-content-ltr .mw-content-rtl .toc ul, .mw-content-ltr .mw-content-rtl #toc ul {
		text-align: right;
	}
	/* @noflip */.mw-content-ltr .toc ul ul, .mw-content-ltr #toc ul ul,
	.mw-content-rtl .mw-content-ltr .toc ul ul, .mw-content-rtl .mw-content-ltr #toc ul ul {
		margin: 0 0 0 2em;
	}
	/* @noflip */.mw-content-rtl .toc ul ul, .mw-content-rtl #toc ul ul,
	.mw-content-ltr .mw-content-rtl .toc ul ul, .mw-content-ltr .mw-content-rtl #toc ul ul {
		margin: 0 2em 0 0;
	}
	
	#toc #toctitle,
	.toc #toctitle,
	#toc .toctitle,
	.toc .toctitle {
		direction: ltr;
	}
	
	/* tooltip styles */
	.mw-help-field-hint {
		display: none;
		margin-left: 2px;
		margin-bottom: -8px;
		padding: 0px 0px 0px 15px;
		background-image: url(data:image/gif;base64,R0lGODlhCwALALMAAP///01NTZOTk1lZWefn57i4uJSUlPPz82VlZdDQ0HFxcaysrNvb28TExAAAAAAAACH5BAAAAAAALAAAAAALAAsAAAQrUIRJqQQ455nNNBgHJANBDAwgZsVwqIG2IEQYYwXy2lq/Kg3NqqeSVCqCCAA7);
		background-image: url(https://share.coursera.org/wiki/skins/common/images/help-question.gif?2012-03-06T00:55:00Z)!ie;
		background-position: left center;
		background-repeat: no-repeat;
		cursor: pointer;
		font-size: .8em;
		text-decoration: underline;
		color: #0645ad;
	}
	.mw-help-field-hint:hover {
		background-image: url(data:image/gif;base64,R0lGODlhCwALALMAAAtop+7z+GCWwpW51oStz8rb6yZzrafF3bnR5Nzn8QBcoD91oABQmf///wAAAAAAACH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4wLWMwNjAgNjEuMTM0Nzc3LCAyMDEwLzAyLzEyLTE3OjMyOjAwICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOjAyODAxMTc0MDcyMDY4MTE5NkQ0QUQzRjI0NzRCNUQwIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjJBN0FFQTQwQjlGQzExREY5RDlBQTRBODQyMkJCMkFDIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjJBN0FFQTNGQjlGQzExREY5RDlBQTRBODQyMkJCMkFDIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RkM3RjExNzQwNzIwNjgxMTk1RkVBQ0ZBOEQxNTU5MkUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDI4MDExNzQwNzIwNjgxMTk2RDRBRDNGMjQ3NEI1RDAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4B//79/Pv6+fj39vX08/Lx8O/u7ezr6uno5+bl5OPi4eDf3t3c29rZ2NfW1dTT0tHQz87NzMvKycjHxsXEw8LBwL++vby7urm4t7a1tLOysbCvrq2sq6qpqKempaSjoqGgn56dnJuamZiXlpWUk5KRkI+OjYyLiomIh4aFhIOCgYB/fn18e3p5eHd2dXRzcnFwb25tbGtqaWhnZmVkY2JhYF9eXVxbWllYV1ZVVFNSUVBPTk1MS0pJSEdGRURDQkFAPz49PDs6OTg3NjU0MzIxMC8uLSwrKikoJyYlJCMiISAfHh0cGxoZGBcWFRQTEhEQDw4NDAsKCQgHBgUEAwIBAAAh+QQAAAAAACwAAAAACwALAAAEK3CxSalsOOeZxRQY1yBKkihFI2aDEqiMRgBJGGMD8NpavxoHzaqnklQqiwgAOw==);
		background-image: url(https://share.coursera.org/wiki/skins/common/images/help-question-hover.gif?2012-03-06T00:55:00Z)!ie;
	}
	.mw-help-field-data {
		display: block;
		background-color: #d6f3ff;
		padding:5px 8px 4px 8px;
		border: 1px solid #5dc9f4;
		margin-left: 20px;
	}
	.tipsy {
		padding: 5px 5px 10px;
		font-size: 12px;
		position: absolute;
		z-index: 100000;
		overflow: visible;
	}
	.tipsy-inner {
		padding: 5px 8px 4px 8px;
		background-color: #d6f3ff;
		color: black;
		border: 1px solid #5dc9f4;
		max-width: 300px;
		text-align: left;
	}
	.tipsy-arrow {
		position: absolute;
		background: url(data:image/gif;base64,R0lGODlhDQANAMQAAPf399bz/9vu9m/O9NXy/8Pm9svp9pfd+YLW943X9LTn++z093XQ9WnM9OLw9p/c9YTU9InY9/T292DK9Jre+afj+rvq/Nzv9rjk9brl9cPt/ZLb+GbL9MLs/ZHb+KLh+iH5BAAAAAAALAAAAAANAA0AAAVK4BGMZBkcg2WW1lBEKxkVAFTFFQQAwkSYhIlgB3hQTJQHEbBodEiaxmIJyHhIGwwVIGEoAgqGZAswIAIIA3mX+CTWOwfHAd9dtiEAOw==) no-repeat top left;
		background: url(https://share.coursera.org/wiki/skins/common/images/tipsy-arrow.gif?2012-03-06T00:55:00Z) no-repeat top left!ie;
		width: 13px;
		height: 13px;
	}
	.tipsy-se .tipsy-arrow {
		bottom: -2px;
		right: 10px;
		background-position: 0% 100%;
	}
	/* Table Sorting */
	table.sortable th.headerSort {
		background-image: url(https://share.coursera.org/wiki/skins/common/images/sort_both.gif?2012-03-06T00:55:00Z);
		cursor: pointer;
		background-repeat: no-repeat;
		background-position: center right;
		padding-right: 21px;
	}
	table.sortable th.headerSortUp {
		background-image: url(https://share.coursera.org/wiki/skins/common/images/sort_up.gif?2012-03-06T00:55:00Z);
	}
	table.sortable th.headerSortDown {
		background-image: url(https://share.coursera.org/wiki/skins/common/images/sort_down.gif?2012-03-06T00:55:00Z);
	}
	
	/* LTR content in RTL layout */
	.ltr {
		/* @noflip */
		direction: ltr;
		unicode-bidi: embed;
	}
	
	#mw-clearyourcache, #mw-sitecsspreview, #mw-sitejspreview, #mw-usercsspreview, #mw-userjspreview {
		direction: ltr;
		unicode-bidi: embed;
	}
	
	/* Correct user & content directionality when viewing a diff */
	.diff-currentversion-title, .diff {
		direction: ltr;
		unicode-bidi: embed;
	}
	/* @noflip */ .diff-contentalign-right td {
		direction: rtl;
		unicode-bidi: embed;
	}
	/* @noflip */ .diff-contentalign-left td {
		direction: ltr;
		unicode-bidi: embed;
	}
	.diff-otitle, .diff-ntitle, .diff-lineno {
		direction: ltr !important;
		unicode-bidi: embed;
	}
	
	#mw-revision-info, #mw-revision-nav {
		direction: ltr;
	}
	
	/* Images */
	/* @noflip */div.tright, div.floatright, table.floatright {
		clear: right;
		float: right;
	}
	/* @noflip */div.tleft, div.floatleft, table.floatleft {
		float: left;
		clear: left;
	}
	div.floatright, table.floatright, div.floatleft, table.floatleft {
		position: relative;
	}
	
	/* bug 12205 */
	#mw-credits a { unicode-bidi: embed; }
	
}
