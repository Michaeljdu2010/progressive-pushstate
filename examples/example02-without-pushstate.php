<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		
		<title>Video game example without pushstate library.</title>
		<meta name="description" content="">
		<meta name="author" content="Zoltan Hawryluk">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<link href="css/example2.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		
		
		<div class="parallax">
		<header>
				<h1>Video Games of the <small>1980s</small></h1>
		</header>
			<nav class="fixedsticky">
			<ul>
					<li><a class="pp-link" href="?f=home">Home</a></li>
					<li><a class="pp-link" href="?f=donkey-kong">Donkey Kong</a></li>
					<li><a class="pp-link" href="?f=pac-man">Pac-Man</a></li>
					<li><a class="pp-link" href="?f=robotron">Robotron</a></li>
					<li><a class="pp-link" href="?f=tempest">Tempest</a></li>
			</ul>
				<form class="pp-form" data-pp-events="change">
					<select name="f">
						<option value="home" selected>Home</option>
						<option value="donkey-kong">Donkey Kong</option>
						<option value="pac-man">Pac-Man</option>
						<option value="robotron">Robotron</option>
						<option value="tempest">Tempest</option>
					</select>
				</form>
		</nav>
			<div id="screen-reader-alert"
				class="visually-hidden"
				role="alert"
				aria-relevant="all"
				aria-live="assertive"
			>Now displaying the <strong class="page-name"><?php echo $_GET["f"]; ?></strong> page.</div>
			<article id="content">
		<?php
			
			if (isset($_GET["f"])) {
				$fragment = $_GET["f"];
			} else {
				$fragment = "home";
			}
			include "includes/" . $fragment . ".html";
		?>
		</article>
		</div>
		
		
	</body>
</html>
