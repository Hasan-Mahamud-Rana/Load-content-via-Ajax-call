
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Egon</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <script src="slick/slick.js"></script>
</head>

<body>

<div id="demo-top-bar">

  <div id="demo-bar-inside">

    <h2 id="demo-bar-badge">
      <a href="/">CSS-Tricks Example</a>
    </h2>

    <div id="demo-bar-buttons">
          </div>

  </div>

</div>
    <div class="page-wrap">

      <div class="gallery">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/egon.png" alt="Egon" class="egon"/>
      </div>

      <h1>Egon</h1>

      <div class="content">
          <p>Egon Spengler, Ph.D. is a fictional character from the Ghostbusters franchise. He appears in the films Ghostbusters and Ghostbusters II, in the animated television series The Real Ghostbusters, and later in Extreme Ghostbusters. Spengler was portrayed by Harold Ramis in the films and voiced by him in Ghostbusters: The Video Game, and voiced by Maurice LaMarche in the cartoon series. He is a member of the Ghostbusters and one of the three doctors of parapsychology, along with Dr. Peter Venkman and Dr. Raymond Stantz.</p>
          <small><a href="http://en.wikipedia.org/wiki/Egon_Spengler">Source: Wikipedia</a></small>
      </div>

    </div>

 <style type="text/css" style="display: none !important;">
	* {
		margin: 0;
		padding: 0;
	}
	body {
		overflow-x: hidden;
	}
	#demo-top-bar {
		text-align: left;
		background: #222;
		position: relative;
		zoom: 1;
		width: 100% !important;
		z-index: 6000;
		padding: 20px 0 20px;
	}
	#demo-bar-inside {
		width: 960px;
		margin: 0 auto;
		position: relative;
		overflow: hidden;
	}
	#demo-bar-buttons {
		padding-top: 10px;
		float: right;
	}
	#demo-bar-buttons a {
		font-size: 12px;
		margin-left: 20px;
		color: white;
		margin: 2px 0;
		text-decoration: none;
		font: 14px "Lucida Grande", Sans-Serif !important;
	}
	#demo-bar-buttons a:hover,
	#demo-bar-buttons a:focus {
		text-decoration: underline;
	}
	#demo-bar-badge {
		display: inline-block;
		width: 302px;
		padding: 0 !important;
		margin: 0 !important;
		background-color: transparent !important;
	}
	#demo-bar-badge a {
		display: block;
		width: 100%;
		height: 38px;
		border-radius: 0;
		bottom: auto;
		margin: 0;
		background: url(/images/examples-logo.png) no-repeat;
		background-size: 100%;
		overflow: hidden;
		text-indent: -9999px;
	}
	#demo-bar-badge:before, #demo-bar-badge:after {
		display: none !important;
	}
</style>
</body>

</html>