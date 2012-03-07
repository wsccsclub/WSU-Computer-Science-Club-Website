<!doctype html>
<html lang="en">
	<head>
		<img class="logo" width="186" height="88" alt="Westfield. Founded 1838." src="http://www.westfield.ma.edu/img/logo.png">
		<title>Computer Science Club Website pagename</title>
		
	</head>
	<body>
		<header>
			<h1 align="center">Computer Science Club Website</h1>
			<h1></h1>
			<link rel="stylesheet" type="text/css" href="/clubs/cs/css/styles.css" />
		</header>
		<?php
			include ("menu.php");
		?>

		<section id="intro">
			<header>
				<h2>Currently Under Development</h2>
			</header>
		</section>
		<section id="content">
			<h3> Please excuse our appearance as we are currently in the development stages of building this website </h3>
			<form action="question_process.php" method="post">
				<h3>Ask us a question</h3>
				<p>
					<label for="name">Name</label>
					<input name="name" id="name" type="text" required />
				</p>
				<p>
					<label for="email">E-mail</label>
					<input name="email" id="email" type="email" required />
				</p>
				</p>
				<p>
					<label for="message">Question(s)</label>
					<textarea name="message" id="message" required></textarea>
				</p>
				<p>
					<input type="submit" value="submit comment" />
				</p>
			</form>
			<aside>
				<section>
					<header>
						<h3>Dicussions</h3>
					</header>
					<ul>
						<script type="text/javascript">
							<!--
							rssmikle_url="http://groups.google.com/group/wsucsclub/feed/rss_v2_0_msgs.xml";
							rssmikle_frame_width = "200";
							rssmikle_frame_height = "500";
							rssmikle_target = "_blank";
							rssmikle_font_size = "13";
							rssmikle_border = "on";
							rssmikle_css_url = "";
							rssmikle_title = "off";
							rssmikle_title_bgcolor = "#000000";
							rssmikle_title_color = "#FFFFFF";
							rssmikle_title_bgimage = "http://";
							rssmikle_item_bgcolor = "#FFFFFF";
							rssmikle_item_bgimage = "http://";
							rssmikle_item_title_length = "20";
							rssmikle_item_title_color = "#666666";
							rssmikle_item_border_bottom = "on";
							rssmikle_item_description = "on";
							rssmikle_item_description_length = "40";
							rssmikle_item_description_color = "#666666";
							rssmikle_item_description_tag = "off";
							rssmikle_item_podcast = "icon";
							//-->
						</script>
						<script type="text/javascript" src="http://feed.mikle.com/js/rssmikle.js"></script>
						<div style="font-size:10px; text-align:right;">
							<a href="http://feed.mikle.com/en/" target="_blank" style="color:#CCCCCC;">FeedWind</a>
							<!--Please display the above link in your web page according to Terms of Service.-->
						</div>
					</ul>
					</section
			</aside>
		</section>
		<footer>
			<p></p>
		</footer>
	</body>
</html>
