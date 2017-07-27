/* Code tidied up by ScrapBook */
@import url("fira.css");
@font-face {
  font-family: "Open Sans Light";
  font-style: normal;
  font-weight: 400;
  src: url("OpenSans-Light-webfont.eot") format("embedded-opentype"), url("OpenSans-Light-webfont.woff") format("woff"), url("OpenSans-Light-webfont.ttf") format("truetype"), url("OpenSans-Light-webfont.svg") format("svg");
}
@font-face {
  font-family: "Open Sans Light";
  font-style: normal;
  font-weight: 700;
  src: url("OpenSans-Regular-webfont.eot") format("embedded-opentype"), url("OpenSans-Regular-webfont.woff") format("woff"), url("OpenSans-Regular-webfont.ttf") format("truetype"), url("OpenSans-Regular-webfont.svg") format("svg");
}
@font-face {
  font-family: "Open Sans Light";
  font-style: italic;
  font-weight: 400;
  src: url("OpenSans-LightItalic-webfont.eot") format("embedded-opentype"), url("OpenSans-LightItalic-webfont.woff") format("woff"), url("OpenSans-LightItalic-webfont.ttf") format("truetype"), url("OpenSans-LightItalic-webfont.svg") format("svg");
}
@font-face {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 400;
  src: url("OpenSans-Regular-webfont.eot") format("embedded-opentype"), url("OpenSans-Regular-webfont.woff") format("woff"), url("OpenSans-Regular-webfont.ttf") format("truetype"), url("OpenSans-Regular-webfont.svg") format("svg");
}
@font-face {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 700;
  src: url("OpenSans-Semibold-webfont.eot") format("embedded-opentype"), url("OpenSans-Semibold-webfont.woff") format("woff"), url("OpenSans-Semibold-webfont.ttf") format("truetype"), url("OpenSans-Semibold-webfont.svg") format("svg");
}
@font-face {
  font-family: "Open Sans";
  font-style: italic;
  font-weight: 400;
  src: url("OpenSans-Italic-webfont.eot") format("embedded-opentype"), url("OpenSans-Italic-webfont.woff") format("woff"), url("OpenSans-Italic-webfont.ttf") format("truetype"), url("OpenSans-Italic-webfont.svg") format("svg");
}
@font-face {
  font-family: "Open Sans Extra Bold";
  font-style: normal;
  font-weight: 700;
  src: url("OpenSans-ExtraBold-webfont.eot") format("embedded-opentype"), url("OpenSans-ExtraBold-webfont.woff") format("woff"), url("OpenSans-ExtraBold-webfont.ttf") format("truetype"), url("OpenSans-ExtraBold-webfont.svg") format("svg");
}
body, .body { font-family: "Open Sans","Trebuchet MS",sans-serif !important; }
body { background: url("bg-gradient-sand.png") repeat-x scroll 0% 0%, url("bg-sand.png") repeat scroll 0% 0%, rgb(245, 241, 232) none repeat scroll 0% 0%; }
h1, h2, h3, h4, h5, h6, .huge, .large, div#content #firstHeading { font-family: "Fira Sans","Trebuchet MS",sans-serif !important; }
pre, code, tt, kbd, samp, textarea, .mw-code { font-family: "Fira Mono",monospace; }
#mw-page-base { background-image: none !important; background-color: transparent !important; }
div#mw-head { background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; }
div#mw-panel div.portal div.body ul li a { color: rgb(0, 150, 221); }
div#mw-panel div.portal div.body ul li a:hover, div#mw-panel div.portal div.body ul li a:visited { color: rgb(0, 83, 159); }
a, a.external, a.free { color: rgb(0, 150, 221); }
a:hover, a:visited, a.external:visited, a.free:visited { color: rgb(0, 83, 159); }
@media print {
  #toc { border: 1px solid rgb(170, 170, 170); background-color: rgb(249, 249, 249); padding: 5px; display: table; }
  body { background: white none repeat scroll 0% 0%; color: black; margin: 0px; padding: 0px; }
  .noprint, div#jump-to-nav, .mw-jump, div.top, div#column-one, #colophon, .mw-editsection, .mw-editsection-like, .toctoggle, .tochidden, div#f-poweredbyico, div#f-copyrightico, li#viewcount, li#about, li#disclaimer, li#mobileview, li#privacy, #footer-places, .mw-hidden-catlinks, tr.mw-metadata-show-hide-extended, span.mw-filepage-other-resolutions, #filetoc, .usermessage, .patrollink, #mw-navigation { display: none; }
  ul { list-style-type: square; }
  #content { background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; border: medium none !important; padding: 0px !important; margin: 0px !important; direction: ltr; }
  #footer { background: white none repeat scroll 0% 0%; color: black; margin-top: 1em; border-top: 1px solid rgb(170, 170, 170); direction: ltr; }
  h1, h2, h3, h4, h5, h6 { font-weight: bold; }
  p { margin: 1em 0px; line-height: 1.2em; }
  a { color: black !important; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0% !important; padding: 0px !important; }
  a:link, a:visited { color: rgb(85, 34, 0); background: transparent none repeat scroll 0% 0%; text-decoration: underline; }
  #content a.external.text::after, #content a.external.autonumber::after { content: " (" attr(href) ")"; }
  #content { background: white none repeat scroll 0% 0%; color: black; }
  a, a.external, a.new, a.stub { color: black !important; text-decoration: none !important; }
  a, a.external, a.new, a.stub { color: inherit !important; text-decoration: inherit !important; }
  img { border: medium none; vertical-align: middle; }
  .wikitable, .thumb, img { page-break-inside: avoid; }
  h2, h3, h4, h5, h6 { page-break-after: avoid; }
  p {  }
}
@media screen {
  .mw-content-ltr { direction: ltr; }
  .sitedir-ltr textarea, .sitedir-ltr input { direction: ltr; }
  input[type="submit"], input[type="button"], input[type="reset"], input[type="file"] { direction: ltr; }
  #catlinks { text-align: left; }
  .catlinks-allhidden { display: none; }
  .visualClear { clear: both; }
  .mw-content-ltr ul, .mw-content-rtl .mw-content-ltr ul { margin: 0.3em 0px 0px 1.6em; padding: 0px; }
  h1:lang(anp), h1:lang(as), h1:lang(bh), h1:lang(bho), h1:lang(bn), h1:lang(gu), h1:lang(hi), h1:lang(kn), h1:lang(ks), h1:lang(ml), h1:lang(mr), h1:lang(my), h1:lang(mai), h1:lang(ne), h1:lang(new), h1:lang(or), h1:lang(pa), h1:lang(pi), h1:lang(sa), h1:lang(ta), h1:lang(te) { line-height: 1.6em !important; }
  h2:lang(anp), h3:lang(anp), h4:lang(anp), h5:lang(anp), h6:lang(anp), h2:lang(as), h3:lang(as), h4:lang(as), h5:lang(as), h6:lang(as), h2:lang(bho), h3:lang(bho), h4:lang(bho), h5:lang(bho), h6:lang(bho), h2:lang(bh), h3:lang(bh), h4:lang(bh), h5:lang(bh), h6:lang(bh), h2:lang(bn), h3:lang(bn), h4:lang(bn), h5:lang(bn), h6:lang(bn), h2:lang(gu), h3:lang(gu), h4:lang(gu), h5:lang(gu), h6:lang(gu), h2:lang(hi), h3:lang(hi), h4:lang(hi), h5:lang(hi), h6:lang(hi), h2:lang(kn), h3:lang(kn), h4:lang(kn), h5:lang(kn), h6:lang(kn), h2:lang(ks), h3:lang(ks), h4:lang(ks), h5:lang(ks), h6:lang(ks), h2:lang(ml), h3:lang(ml), h4:lang(ml), h5:lang(ml), h6:lang(ml), h2:lang(mr), h3:lang(mr), h4:lang(mr), h5:lang(mr), h6:lang(mr), h2:lang(my), h3:lang(my), h4:lang(my), h5:lang(my), h6:lang(my), h2:lang(mai), h3:lang(mai), h4:lang(mai), h5:lang(mai), h6:lang(mai), h2:lang(ne), h3:lang(ne), h4:lang(ne), h5:lang(ne), h6:lang(ne), h2:lang(new), h3:lang(new), h4:lang(new), h5:lang(new), h6:lang(new), h2:lang(or), h3:lang(or), h4:lang(or), h5:lang(or), h6:lang(or), h2:lang(pa), h3:lang(pa), h4:lang(pa), h5:lang(pa), h6:lang(pa), h2:lang(pi), h3:lang(pi), h4:lang(pi), h5:lang(pi), h6:lang(pi), h2:lang(sa), h3:lang(sa), h4:lang(sa), h5:lang(sa), h6:lang(sa), h2:lang(ta), h3:lang(ta), h4:lang(ta), h5:lang(ta), h6:lang(ta), h2:lang(te), h3:lang(te), h4:lang(te), h5:lang(te), h6:lang(te) { line-height: 1.2em; }
  #toc ul, .toc ul { margin: 0.3em 0px; }
  .mw-content-ltr .toc ul, .mw-content-ltr #toc ul, .mw-content-rtl .mw-content-ltr .toc ul, .mw-content-rtl .mw-content-ltr #toc ul { text-align: left; }
  .mw-content-ltr .toc ul ul, .mw-content-ltr #toc ul ul, .mw-content-rtl .mw-content-ltr .toc ul ul, .mw-content-rtl .mw-content-ltr #toc ul ul { margin: 0px 0px 0px 2em; }
  #toc #toctitle, .toc #toctitle, #toc .toctitle, .toc .toctitle { direction: ltr; }
  .mw-jump, #jump-to-nav { overflow: hidden; height: 0px; }
  .printfooter { display: none; }
  .mw-editsection, .toctoggle, #jump-to-nav { -moz-user-select: none; }
}
@media screen {
  a { text-decoration: none; color: rgb(6, 69, 173); background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; }
  a:visited { color: rgb(11, 0, 128); }
  a:active { color: rgb(250, 167, 0); }
  a:hover, a:focus { text-decoration: underline; }
  .mw-body a.external { color: rgb(51, 102, 187); }
  .mw-body a.external:visited { color: rgb(102, 51, 102); }
  .mw-body a.external:active { color: rgb(187, 102, 51); }
  img { border: medium none; vertical-align: middle; }
  h1, h2, h3, h4, h5, h6 { color: black; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; font-weight: normal; margin: 0px; overflow: hidden; padding-top: 0.5em; padding-bottom: 0.17em; border-bottom: 1px solid rgb(170, 170, 170); }
  h1 { font-size: 188%; }
  h2 { font-size: 150%; }
  h3, h4, h5, h6 { border-bottom: medium none; font-weight: bold; }
  h3 { font-size: 132%; }
  h4 { font-size: 116%; }
  h1, h2 { margin-bottom: 0.6em; }
  h3, h4, h5 { margin-bottom: 0.3em; }
  p { margin: 0.4em 0px 0.5em; line-height: 1.5em; }
  ul { line-height: 1.5em; list-style-type: square; margin: 0.3em 0px 0px 1.6em; padding: 0px; }
  li { margin-bottom: 0.1em; }
  pre, code, tt, kbd, samp, .mw-code { font-family: monospace,Courier; }
  code { background-color: rgb(249, 249, 249); }
  form { border: medium none; margin: 0px; }
  #toc, .toc, .mw-warning { border: 1px solid rgb(170, 170, 170); background-color: rgb(249, 249, 249); padding: 5px; font-size: 95%; }
  #toc, .toc { display: table; padding: 7px; }
  #toc h2, .toc h2 { display: inline; border: medium none; padding: 0px; font-size: 100%; font-weight: bold; }
  #toc #toctitle, .toc #toctitle, #toc .toctitle, .toc .toctitle { text-align: center; }
  #toc ul, .toc ul { list-style-type: none; list-style-image: none; margin-left: 0px; padding: 0px; text-align: left; }
  #toc ul ul, .toc ul ul { margin: 0px 0px 0px 2em; }
  #toc .toctoggle, .toc .toctoggle { font-size: 94%; }
  .catlinks { border: 1px solid rgb(170, 170, 170); background-color: rgb(249, 249, 249); padding: 5px; margin-top: 1em; clear: both; }
  .firstHeading, #firstHeading { margin-bottom: 0.1em; line-height: 1.2em; padding-bottom: 0px; }
  #siteSub { display: none; }
  #jump-to-nav { margin-top: -1.4em; margin-bottom: 1.4em; }
  #contentSub, #contentSub2 { font-size: 84%; line-height: 1.2em; margin: 0px 0px 1.4em 1em; color: rgb(84, 84, 84); width: auto; }
}
@media screen {
  html { font-size: 1em; }
  html, body { height: 100%; margin: 0px; padding: 0px; font-family: sans-serif; }
  body { background-color: rgb(246, 246, 246); }
  div#content { margin-left: 10em; padding: 1em; border-width: 1px 0px 1px 1px; border-style: solid; border-color: rgb(167, 215, 249); -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; margin-top: -1px; background-color: rgb(255, 255, 255); color: rgb(37, 37, 37); direction: ltr; }
  div#content p { line-height: inherit; margin: 0.5em 0px; }
  div#content h1, div#content h2, div#content #firstHeading { font-family: sans-serif; line-height: 1.3; margin-bottom: 0.25em; padding: 0px; }
  div#content h1, div#content #firstHeading { font-size: 1.8em; }
  div#content h2 { font-size: 1.5em; margin-top: 1em; }
  div#content h3, div#content h4, div#content h5, div#content h6 { line-height: 1.6; margin-top: 0.3em; margin-bottom: 0px; padding-bottom: 0px; }
  div#content h3 { font-size: 1.17em; }
  div#content h3, div#content h4 { font-weight: bold; }
  div#content h4, div#content h5, div#content h6 { font-size: 100%; }
  div#content #toc h2, div#content .toc h2 { font-size: 100%; font-family: sans-serif; }
  div.emptyPortlet { display: none; }
  ul { list-style-type: disc; list-style-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAANAQMAAABb8jbLAAAABlBMVEX///8AUow5QSOjAAAAAXRSTlMAQObYZgAAABNJREFUCB1jYEABBQw/wLCAgQEAGpIDyT0IVcsAAAAASUVORK5CYII="); }
  #bodyContent { position: relative; width: 100%; line-height: 1.6; font-size: 0.875em; }
  body.vector-animateLayout div#content, body.vector-animateLayout div#footer, body.vector-animateLayout #left-navigation { transition: margin-left 250ms ease 0s, padding 250ms ease 0s; }
  body.vector-animateLayout #p-logo { transition: left 250ms ease 0s; }
  body.vector-animateLayout #mw-panel { transition: padding-right 250ms ease 0s; }
  body.vector-animateLayout #p-search { transition: margin-right 250ms ease 0s; }
  body.vector-animateLayout #p-personal { transition: right 250ms ease 0s; }
  body.vector-animateLayout #mw-head-base { transition: margin-left 250ms ease 0s; }
  #p-personal { position: absolute; top: 0.33em; right: 0.75em; z-index: 100; }
  #p-personal h3 { display: none; }
  #p-personal ul { list-style-type: none; list-style-image: none; margin: 0px; padding-left: 10em; }
  #p-personal li { line-height: 1.125em; float: left; margin-left: 0.75em; margin-top: 0.5em; font-size: 0.75em; white-space: nowrap; }
  #pt-userpage, #pt-anonuserpage, #pt-login { background-position: left top; background-repeat: no-repeat; background-image: linear-gradient(transparent, transparent), url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSIxMiIgaGVpZ2h0PSIxMy44MzciPjxkZWZzPjxsaW5lYXJHcmFkaWVudCBpZD0iZSI+PHN0b3Agb2Zmc2V0PSIwIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLW9wYWNpdHk9IjAiLz48L2xpbmVhckdyYWRpZW50PjxsaW5lYXJHcmFkaWVudCBpZD0iYiI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjM2I3NGJjIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjMmQ1OTkwIi8+PC9saW5lYXJHcmFkaWVudD48bGluZWFyR3JhZGllbnQgaWQ9ImMiPjxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iI2ZmZiIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iI2M5YzljOSIvPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IGlkPSJhIj48c3RvcCBvZmZzZXQ9IjAiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3Atb3BhY2l0eT0iMCIvPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IGlkPSJkIj48c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9IiNmNGQ5YjEiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiNkZjk3MjUiLz48L2xpbmVhckdyYWRpZW50PjxyYWRpYWxHcmFkaWVudCBjeD0iMzEuMTEzIiBjeT0iMTkuMDA5IiByPSI4LjY2MiIgZng9IjMxLjExMyIgZnk9IjE5LjAwOSIgaWQ9ImYiIHhsaW5rOmhyZWY9IiNhIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIvPjxyYWRpYWxHcmFkaWVudCBjeD0iMjguMDkiIGN5PSIyNy4yMDMiIHI9IjEzLjU2NSIgZng9IjI4LjA5IiBmeT0iMjcuMjAzIiBpZD0iZyIgeGxpbms6aHJlZj0iI2IiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDEuMjk4IDAgMCAuODg1IC04LjM1OSA0Ljk0KSIvPjxsaW5lYXJHcmFkaWVudCB4MT0iMzAuOTM2IiB5MT0iMjkuNTUzIiB4Mj0iMzAuOTM2IiB5Mj0iMzUuODAzIiBpZD0iaCIgeGxpbms6aHJlZj0iI2MiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIi8+PHJhZGlhbEdyYWRpZW50IGN4PSIzMS4xMTMiIGN5PSIxOS4wMDkiIHI9IjguNjYyIiBmeD0iMzEuMTEzIiBmeT0iMTkuMDA5IiBpZD0iaSIgeGxpbms6aHJlZj0iI2EiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIi8+PHJhZGlhbEdyYWRpZW50IGN4PSIyOS4zNDUiIGN5PSIxNy4wNjQiIHI9IjkuMTYyIiBmeD0iMjkuMzQ1IiBmeT0iMTcuMDY0IiBpZD0iaiIgeGxpbms6aHJlZj0iI2QiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KC43ODggMCAwIC43ODggNi4yMjEgMy42MTgpIi8+PGxpbmVhckdyYWRpZW50IHgxPSIyMC42NjIiIHkxPSIzNS44MTgiIHgyPSIyMi42MjciIHkyPSIzNi4yMTgiIGlkPSJrIiB4bGluazpocmVmPSIjZSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoLjk4MyAuMTgyIC0uMTgyIC45ODMgNi4yMzIgLTIuNjUxKSIvPjxsaW5lYXJHcmFkaWVudCB4MT0iMjIuNjg3IiB5MT0iMzYuMzkiIHgyPSIyMS40MDgiIHkyPSIzNS43NCIgaWQ9ImwiIHhsaW5rOmhyZWY9IiNlIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgtLjk3OCAuMjEgLjIxIC45NzggNTUuMTEgLTMuOTQ1KSIvPjwvZGVmcz48ZyBjb2xvcj0iIzAwMCI+PHBhdGggZD0iTTM5Ljc3NSAxOS4wMDlhOC42NjIgOC42NjIgMCAxIDEtMTcuMzI0IDAgOC42NjIgOC42NjIgMCAxIDEgMTcuMzI0IDB6IiB0cmFuc2Zvcm09Im1hdHJpeCguNjkzIDAgMCAuMzc0IC0xNS41NDggMy40ODEpIiBmaWxsPSJ1cmwoI2YpIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIG92ZXJmbG93PSJ2aXNpYmxlIi8+PHBhdGggZD0iTTQuMDQ2IDEyLjM5OGg0LjEzN2MxLjE3MiAwIDIuMzMyLS40MyAyLjc1OC0xLjY1NS40MDQtMS4xNjMuMDY5LTMuMzc4LTIuNTUxLTUuMTcxaC00Ljg5NWMtMi42MiAxLjY1NS0yLjk0NyAzLjkxNy0yLjM0NCA1LjI0LjYxNCAxLjM0NyAxLjY1NSAxLjU4NiAyLjg5NiAxLjU4NnoiIGZpbGw9InVybCgjZykiIGZpbGwtcnVsZT0iZXZlbm9kZCIgc3Ryb2tlPSIjMjA0YTg3IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIG92ZXJmbG93PSJ2aXNpYmxlIiBzdHJva2Utd2lkdGg9IjAuMzkiLz48cGF0aCBkPSJNNC4zMjEgNi4xOTNjMS4yNDEgMS4xMDMgMS43OTMgNS4xMDIgMS43OTMgNS4xMDJzLjU1Mi0zLjk5OSAxLjUxNy01LjE3MWwtMy4zMDkuMDY5eiIgZmlsbD0idXJsKCNoKSIgZmlsbC1ydWxlPSJldmVub2RkIiBvdmVyZmxvdz0idmlzaWJsZSIvPjxwYXRoIGQ9Ik01LjIxIDYuNjA3cy0uODM5LjY0OC0uNzY3IDEuNDI4Yy0uNzk2LS43MDItLjgxOS0yLjA0OC0uODE5LTIuMDQ4bDEuNTg2LjYyeiIgZmlsbD0iIzcyOWZjZiIgZmlsbC1ydWxlPSJldmVub2RkIiBvdmVyZmxvdz0idmlzaWJsZSIvPjxwYXRoIGQ9Ik00LjAxOCAxMS45OTJsNC4wOTItLjAwOWMxLjAyOSAwIDIuMDQ5LS4zNzcgMi40MjItMS40NTMuMzU1LTEuMDIyLS4wMzctMi45NjctMi4zMzgtNC41NDJsLTQuNDk1LS4wOTVjLTIuMzAxIDEuNDUzLTIuNzQ3IDMuNDQxLTIuMjA4IDQuNjk3LjUzOCAxLjI1NiAxLjMyNCAxLjM5MyAyLjUyNiAxLjQwMXoiIG9wYWNpdHk9Ii4yMTUiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBvdmVyZmxvdz0idmlzaWJsZSIgZmlsbD0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIwLjM5Ii8+PHBhdGggZD0iTTYuOTQxIDYuNjA3cy44MzkuNjQ4Ljc2NyAxLjQyOGMuNzk2LS43MDIuODE5LTIuMDQ4LjgxOS0yLjA0OGwtMS41ODYuNjJ6IiBmaWxsPSIjNzI5ZmNmIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIG92ZXJmbG93PSJ2aXNpYmxlIi8+PHBhdGggZD0iTTM5Ljc3NSAxOS4wMDlhOC42NjIgOC42NjIgMCAxIDEtMTcuMzI0IDAgOC42NjIgOC42NjIgMCAxIDEgMTcuMzI0IDB6IiB0cmFuc2Zvcm09Im1hdHJpeCguMzkgMCAwIC4zOSAtNi4xMzggLTIuNDc1KSIgZmlsbD0idXJsKCNpKSIgZmlsbC1ydWxlPSJldmVub2RkIiBvdmVyZmxvdz0idmlzaWJsZSIvPjxwYXRoIGQ9Ik0zOS43NzUgMTkuMDA5YTguNjYyIDguNjYyIDAgMSAxLTE3LjMyNCAwIDguNjYyIDguNjYyIDAgMSAxIDE3LjMyNCAweiIgZmlsbD0idXJsKCNqKSIgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2U9IiNjMTdkMTEiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgb3ZlcmZsb3c9InZpc2libGUiIHRyYW5zZm9ybT0ibWF0cml4KC4zOSAwIDAgLjM5IC02LjA4OSAtMy44NCkiLz48cGF0aCBkPSJNMzkuNzc1IDE5LjAwOWE4LjY2MiA4LjY2MiAwIDEgMS0xNy4zMjQgMCA4LjY2MiA4LjY2MiAwIDEgMSAxNy4zMjQgMHoiIHRyYW5zZm9ybT0ibWF0cml4KC4zNDIgMCAwIC4zNDIgLTQuNTk4IC0yLjkyOSkiIG9wYWNpdHk9Ii4xOTYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIxLjE0IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIG92ZXJmbG93PSJ2aXNpYmxlIiBmaWxsPSJub25lIi8+PHBhdGggZD0iTTIuNDMzIDEyLjA2MmMtLjQ4Ny0uMjEzLS43MDQtLjcyNS0uNzA0LS43MjUuMzI4LTEuNTg3IDEuNDUxLTIuNzQ4IDEuNDUxLTIuNzQ4cy0uODg5IDIuNS0uNzQ2IDMuNDczeiIgb3BhY2l0eT0iLjIyOCIgZmlsbD0idXJsKCNrKSIgZmlsbC1ydWxlPSJldmVub2RkIiBvdmVyZmxvdz0idmlzaWJsZSIvPjxwYXRoIGQ9Ik05LjgwNiAxMS43MjhjLjQ4LS4yMjcuNzA0LS43ODEuNzA0LS43ODEtLjM3NC0xLjU3Ny0xLjU1MS0yLjY2OS0xLjU1MS0yLjY2OXMuOTYxIDIuNDc0Ljg0NyAzLjQ1eiIgb3BhY2l0eT0iLjIyOCIgZmlsbD0idXJsKCNsKSIgZmlsbC1ydWxlPSJldmVub2RkIiBvdmVyZmxvdz0idmlzaWJsZSIvPjwvZz48L3N2Zz4="); padding-left: 15px !important; }
  #mw-panel.collapsible-nav .portal { background-position: left top; background-repeat: no-repeat; background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAAABCAAAAAAphRnkAAAAJ0lEQVQIW7XFsQEAIAyAMPD/b7uLWz8wS5youFW1UREfiIpH1Q2VBz7fGPS1dOGeAAAAAElFTkSuQmCC"); padding: 0.25em 0px !important; margin: -11px 9px 10px 11px; }
  #mw-panel.collapsible-nav .portal h3 { font-size: 0.75em; color: rgb(77, 77, 77); font-weight: normal; background-position: left center; background-repeat: no-repeat; background-image: linear-gradient(transparent, transparent), url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjE2IiBoZWlnaHQ9IjE2Ij48cGF0aCBkPSJNMTMuMDAyIDYuMDAxbC01IDUuMDAxLTUtNS4wMDF6IiBmaWxsPSIjNzk3OTc5Ii8+PC9zdmc+"); padding: 4px 0px 3px 1.5em; margin-bottom: 0px; }
  #mw-panel.collapsible-nav .portal h3:hover { cursor: pointer; text-decoration: none; }
  #mw-panel.collapsible-nav .portal h3 a { color: rgb(77, 77, 77); text-decoration: none; }
  #mw-panel.collapsible-nav .portal .body { margin: 0px 0px 0px 1.25em; background-image: none !important; padding-top: 0px; display: none; }
  #mw-panel.collapsible-nav .portal .body ul li { padding: 0.25em 0px; }
  #mw-panel.collapsible-nav .portal.first { background-image: none; margin-top: 0px; }
  #mw-panel.collapsible-nav .portal.first h3 { display: none; }
  #mw-panel.collapsible-nav .portal.persistent .body { display: block; margin-left: 0.5em; }
  #mw-panel.collapsible-nav .portal.persistent h3 { background-image: none !important; padding-left: 0.7em; cursor: default; }
  #mw-panel.collapsible-nav .portal.collapsed h3 { color: rgb(6, 69, 173); background-position: left center; background-repeat: no-repeat; background-image: linear-gradient(transparent, transparent), url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjE2IiBoZWlnaHQ9IjE2Ij48cGF0aCBkPSJNNi4wMDEgMi45OThsNS4wMDEgNS01LjAwMSA1eiIgZmlsbD0iIzc5Nzk3OSIvPjwvc3ZnPg=="); margin-bottom: 0px; }
  #mw-panel.collapsible-nav .portal.collapsed h3:hover { text-decoration: underline; }
  #mw-panel.collapsible-nav .portal.collapsed h3 a { color: rgb(6, 69, 173); }
  #p-search { float: left; margin-right: 0.5em; margin-left: 0.5em; }
  #p-search h3 { display: none; }
  #p-search form, #p-search input { margin: 0.4em 0px 0px; }
  div#simpleSearch { display: block; width: 14em; height: 1.4em; margin-top: 0.65em; position: relative; min-height: 1px; border: 1px solid rgb(170, 170, 170); color: black; background-color: white; background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAQCAIAAABY/YLgAAAAJUlEQVQIHQXBsQEAAAjDoND/73UWdnerhmHVsDQZJrNWVg3Dqge6bgMe6bejNAAAAABJRU5ErkJggg=="); background-position: left top; background-repeat: repeat-x; }
  div#simpleSearch input { position: absolute; margin: 0px; padding: 0px; border: 0px none; background-color: transparent; color: black; }
  div#simpleSearch #searchInput { top: 0px; left: 0px; width: 90%; padding: 0.2em 0px 0.2em 0.2em; font-size: 13px; direction: ltr; }
  div#simpleSearch #searchInput:focus { outline: medium none; }
  div#simpleSearch #searchInput:-moz-placeholder { color: rgb(153, 153, 153); }
  div#simpleSearch #searchButton, div#simpleSearch #mw-searchButton { top: 0px; right: 0px; width: 10%; height: 100%; cursor: pointer; text-indent: 200%; line-height: 1; direction: ltr; white-space: nowrap; overflow: hidden; background-image: linear-gradient(transparent, transparent), url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEyIiBoZWlnaHQ9IjEzIj48ZyBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZT0iIzZjNmM2YyIgZmlsbD0ibm9uZSI+PHBhdGggZD0iTTExLjI5IDExLjcxbC00LTQiLz48Y2lyY2xlIGN4PSI1IiBjeT0iNSIgcj0iNCIvPjwvZz48L3N2Zz4="); background-position: center center; background-repeat: no-repeat; }
  div.vectorTabs h3, div.vectorMenu h3 span { display: none; }
  div.vectorTabs { float: left; height: 2.5em; background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAuCAIAAABmjeQ9AAAARElEQVR42mVO2wrAUAhy/f8fz+niVMTYQ3hLKkgGgN/IPvgIhUYYV/qogdP75J01V+JwrKZr/5YPcnzN3e6t7l+2K+EFX91B1daOi7sAAAAASUVORK5CYII="); background-position: left bottom; background-repeat: no-repeat; padding-left: 1px; }
  div.vectorTabs ul { float: left; height: 100%; list-style-type: none; list-style-image: none; margin: 0px; padding: 0px; background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAuCAIAAABmjeQ9AAAARElEQVR42mVO2wrAUAhy/f8fz+niVMTYQ3hLKkgGgN/IPvgIhUYYV/qogdP75J01V+JwrKZr/5YPcnzN3e6t7l+2K+EFX91B1daOi7sAAAAASUVORK5CYII="); background-position: right bottom; background-repeat: no-repeat; }
  div.vectorTabs ul li { float: left; line-height: 1.125em; display: inline-block; height: 100%; margin: 0px; padding: 0px; background-color: rgb(243, 243, 243); background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAABkCAIAAADITs03AAAAPElEQVR4XuWK2xEAIAzCsPvv5DSu0ahX3yv4wQVyGGCSvg2dnJvduT8sz/IwKOIfjCi2z/76FhHeJcslVZQFLUC06LZ/AAAAAElFTkSuQmCC"); background-position: left bottom; background-repeat: repeat-x; white-space: nowrap; }
  div.vectorTabs ul > li { display: block; }
  div.vectorTabs li {  }
  div.vectorTabs li.new a, div.vectorTabs li.new a:visited { color: rgb(165, 88, 88); }
  div.vectorTabs li.selected { background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAABkAQAAAABvV2fNAAAADUlEQVQIHWNoYBgWEACJ5TIB0K9KcAAAAABJRU5ErkJggg=="); }
  div.vectorTabs li.selected a, div.vectorTabs li.selected a:visited { color: rgb(51, 51, 51); text-decoration: none; }
  div.vectorTabs li a { display: inline-block; height: 1.9em; padding-left: 0.5em; padding-right: 0.5em; color: rgb(6, 69, 173); cursor: pointer; font-size: 0.8em; }
  div.vectorTabs span { display: inline-block; background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAuCAIAAABmjeQ9AAAARElEQVR42mVO2wrAUAhy/f8fz+niVMTYQ3hLKkgGgN/IPvgIhUYYV/qogdP75J01V+JwrKZr/5YPcnzN3e6t7l+2K+EFX91B1daOi7sAAAAASUVORK5CYII="); background-position: right bottom; background-repeat: no-repeat; }
  div.vectorTabs span a { display: inline-block; padding-top: 1.25em; }
  div.vectorTabs span > a { float: left; display: block; }
  div.vectorMenu { direction: ltr; float: left; background-image: linear-gradient(transparent, transparent), url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjIyIiBoZWlnaHQ9IjE2Ij48cGF0aCBkPSJNMTUuNTAyIDYuMDAxbC01IDUuMDAxLTUtNS4wMDF6IiBmaWxsPSIjNzk3OTc5Ii8+PC9zdmc+"); background-position: 100% 60%; background-repeat: no-repeat; cursor: pointer; transition: background-position 250ms ease 0s; }
  div#mw-head div.vectorMenu h3 { float: left; background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAuCAIAAABmjeQ9AAAARElEQVR42mVO2wrAUAhy/f8fz+niVMTYQ3hLKkgGgN/IPvgIhUYYV/qogdP75J01V+JwrKZr/5YPcnzN3e6t7l+2K+EFX91B1daOi7sAAAAASUVORK5CYII="); background-repeat: no-repeat; background-position: left bottom; margin-left: -1px; }
  div#mw-head div.vectorMenu > h3 { background-image: none; }
  div#mw-head div.vectorMenu h4, div#p-variants.vectorMenu #mw-vector-current-variant { display: inline-block; float: left; font-size: 0.8em; padding-left: 0.5em; padding-top: 1.375em; font-weight: normal; border: medium none; }
  div.vectorMenu h3 a { display: inline-block; width: 24px; height: 1.9em; text-decoration: none; background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAuCAIAAABmjeQ9AAAARElEQVR42mVO2wrAUAhy/f8fz+niVMTYQ3hLKkgGgN/IPvgIhUYYV/qogdP75J01V+JwrKZr/5YPcnzN3e6t7l+2K+EFX91B1daOi7sAAAAASUVORK5CYII="); background-repeat: no-repeat; background-position: right bottom; }
  div.vectorMenu h3 > a { display: block; }
  div.vectorMenu div.menu { position: relative; display: none; clear: both; text-align: left; }
  div.vectorMenu:hover div.menu, div.vectorMenu.menuForceShow div.menu { display: block; }
  div.vectorMenu ul { position: absolute; background-color: white; border-width: 0px 1px 1px; border-style: solid; border-color: silver; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; list-style-type: none; list-style-image: none; padding: 0px; margin: 0px 0px 0px -1px; text-align: left; }
  div.vectorMenu ul, x:-moz-any-link { min-width: 5em; }
  div.vectorMenu ul, x:-moz-any-link, x:default { min-width: 0px; }
  @keyframes rotate {
0% { transform: rotate(0deg); }
100% { transform: rotate(360deg); }
}
  @keyframes rotate {
0% { transform: rotate(0deg); }
100% { transform: rotate(360deg); }
}
  @keyframes rotate {
0% { transform: rotate(0deg); }
100% { transform: rotate(360deg); }
}
  #mw-navigation h2 { position: absolute; top: -9999px; }
  #mw-page-base { height: 5em; background-position: left bottom; background-repeat: repeat-x; background-image: linear-gradient(rgb(255, 255, 255) 50%, rgb(246, 246, 246) 100%); background-color: rgb(255, 255, 255); }
  #mw-head-base { margin-top: -5em; margin-left: 10em; height: 5em; }
  div#mw-head { position: absolute; top: 0px; right: 0px; width: 100%; }
  div#mw-head h3 { margin: 0px; padding: 0px; }
  #left-navigation { float: left; margin-left: 10em; margin-top: 2.5em; margin-bottom: -2.5em; display: inline; }
  #right-navigation { float: right; margin-top: 2.5em; }
  #p-logo { position: absolute; top: -160px; left: 0px; width: 10em; height: 160px; }
  #p-logo a { display: block; width: 10em; height: 160px; background-repeat: no-repeat; background-position: center center; text-decoration: none; }
  div#mw-panel { font-size: inherit; position: absolute; top: 160px; padding-top: 1em; width: 10em; left: 0px; }
  div#mw-panel div.portal { padding-bottom: 1.5em; direction: ltr; }
  div#mw-panel div.portal h3 { font-weight: normal; color: rgb(68, 68, 68); padding: 0px 1.75em 0.25em 0.25em; cursor: default; border: medium none; font-size: 0.75em; }
  div#mw-panel div.portal div.body { padding-top: 0.5em; margin: 0px 0px 0px 1.25em; background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAAABCAAAAAAphRnkAAAAJ0lEQVQIW7XFsQEAIAyAMPD/b7uLWz8wS5youFW1UREfiIpH1Q2VBz7fGPS1dOGeAAAAAElFTkSuQmCC"); background-repeat: no-repeat; background-position: left top; }
  div#mw-panel div.portal div.body ul { list-style-type: none; list-style-image: none; padding: 0px; margin: 0px; }
  div#mw-panel div.portal div.body ul li { line-height: 1.125em; padding: 0px 0px 0.5em; margin: 0px; font-size: 0.75em; overflow-wrap: break-word; }
  div#mw-panel div.portal div.body ul li a { color: rgb(6, 69, 173); }
  div#mw-panel div.portal div.body ul li a:visited { color: rgb(11, 0, 128); }
  div#footer { margin-left: 10em; margin-top: 0px; padding: 0.75em; direction: ltr; }
  div#footer ul { list-style-type: none; list-style-image: none; margin: 0px; padding: 0px; }
  div#footer ul li { margin: 0px; padding: 0.5em 0px; color: rgb(51, 51, 51); font-size: 0.7em; }
  div#footer #footer-icons { float: right; }
  div#footer #footer-icons li { float: left; margin-left: 0.5em; line-height: 2em; text-align: right; }
  div#footer #footer-info li { line-height: 1.4em; }
  div#footer #footer-places li { float: left; margin-right: 1em; line-height: 2em; }
  body.ltr div#footer #footer-places { float: left; }
  #content .external { background-position: right center; background-repeat: no-repeat; background-image: linear-gradient(transparent, transparent), url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwIiBoZWlnaHQ9IjEwIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtODI2LjQyOSAtNjk4Ljc5MSkiPjxyZWN0IHdpZHRoPSI1Ljk4MiIgaGVpZ2h0PSI1Ljk4MiIgeD0iODI2LjkyOSIgeT0iNzAyLjMwOSIgZmlsbD0iI2ZmZiIgc3Ryb2tlPSIjMDZjIi8+PGc+PHBhdGggZD0iTTgzMS4xOTQgNjk4Ljc5MWg1LjIzNHY1LjM5MWwtMS41NzEgMS41NDUtMS4zMS0xLjMxLTIuNzI1IDIuNzI1LTIuNjg5LTIuNjg5IDIuODA4LTIuODA4LTEuMzExLTEuMzExeiIgZmlsbD0iIzA2ZiIvPjxwYXRoIGQ9Ik04MzUuNDI0IDY5OS43OTVsLjAyMiA0Ljg4NS0xLjgxNy0xLjgxNy0yLjg4MSAyLjg4MS0xLjIyOC0xLjIyOCAyLjg4MS0yLjg4MS0xLjg1MS0xLjg1MXoiIGZpbGw9IiNmZmYiLz48L2c+PC9nPjwvc3ZnPg=="); padding-right: 13px; }
}
@media screen and (min-width: 982px) {
  div#content { margin-left: 11em; padding: 1.25em 1.5em 1.5em; }
  #p-logo { left: 0.5em; }
  div#footer { margin-left: 11em; padding: 1.25em; }
  #mw-panel { padding-left: 0.5em; }
  #p-search { margin-right: 1em; }
  #left-navigation { margin-left: 11em; }
  #p-personal { right: 1em; }
  #mw-head-base { margin-left: 11em; }
}
