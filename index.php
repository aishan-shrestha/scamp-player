<!DOCTYPE html>
<html lang="en">
<head>
	<?php session_start();
	unset($_SESSION['scamp_player_list']); ?>
	<meta charset="UTF-8">
	<title>Scamp Player</title>

	<link rel='stylesheet' id='scamp-player-css'  href='css/scamp.player.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='scamp-player-skin-css'  href='css/scamp.player.min.dark.css' type='text/css' media='all' />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

	<ul>
		Albums
		<li>
			<a class="sp-play-list" data-id="album1" href="javascript:void(0)">Play Album1</a>
			<ul id="album1">
				<li>
				<a class="sp-play-track" href="media/01-Hello.mp3" data-cover="media/01-Hello-mp3-image-150x150.jpg" data-artist="Adele" data-shop_url="">
						<span class="track-meta">
							<span class="track-title">Hello</span>
							<span class="track-artists">Adele</span>
							<span class="track-counter">0</span>
						</span>
					</a>
					<div class="track-buttons"></div>
				</li>
				<li>
				<a class="sp-play-track" href="media/Maya-Ko-Dori-Deepak-Bajracharya-Ju-Ju-Na-Na.mp3" data-cover="media/audio.png" data-artist="Deepak Bajracharya">
						<span class="track-meta">
							<span class="track-title">Ju-Ju-Na-Na</span>
							<span class="track-artists">Deepak Bajracharya</span>
							<span class="track-counter">0</span>
						</span>
					</a>
					<div class="track-buttons"></div>
				</li>
				<li>
				<a class="sp-play-track" href="media/Taalko-pani.mp3" data-cover="media/audio.png" data-artist="Nepathe">
						<span class="track-meta">
							<span class="track-title">Taalko pani</span>
							<span class="track-artists">Nepathe</span>
							<span class="track-counter">0</span>
						</span>
					</a>
					<div class="track-buttons"></div>
				</li>
				<li>
					<a class="sp-play-track" href="media/suzuee-Q.mp3" data-cover="media/audio.png" data-artist="Nepathe">
						<span class="track-meta">
							<span class="track-title">SusieQ</span>
							<span class="track-artists">CCR</span>
							<span class="track-counter">0</span>
						</span>
					</a>
					<div class="track-buttons"></div>
				</li>
				<li>
					<a class="sp-play-track" href="media/Travelin-Band.mp3" data-cover="media/audio.png" data-artist="Nepathe">
						<span class="track-meta">
							<span class="track-title">Travelin-Band</span>
							<span class="track-artists">CCR</span>
							<span class="track-counter">0</span>
						</span>
					</a>
					<div class="track-buttons"></div>
				</li>
				<li>
					<a class="sp-play-track" href="media/Have-u-ever-seen-the-rain.mp3" data-cover="media/audio.png" data-artist="Nepathe">
						<span class="track-meta">
							<span class="track-title">Travelin-Band</span>
							<span class="track-artists">CCR</span>
							<span class="track-counter">0</span>
						</span>
					</a>
					<div class="track-buttons"></div>
				</li>

			</ul>
		</li>

		<li>
			<a class="sp-play-list" data-id="album2" href="javascript:void(0)">Play Album2</a>
			<ul id="album2">
				<li>
				<a class="sp-play-track" href="media/Ukali-Orali.mp3" data-cover="media/audio.png" data-artist="Nepathe">
						<span class="track-meta">
							<span class="track-title">Ukali-Orali</span>
							<span class="track-artists">Nepathe</span>
							<span class="track-counter">0</span>
						</span>
					</a>
					<div class="track-buttons"></div>
				</li>
				<li>
				<a class="sp-play-track" href="media/Udayo-Relaile.mp3" data-cover="media/audio.png" data-artist="Nepathe">
						<span class="track-meta">
							<span class="track-title">Udayo-Relaile</span>
							<span class="track-artists">Nepathe</span>
							<span class="track-counter">0</span>
						</span>
					</a>
					<div class="track-buttons"></div>
				</li>
			</ul>
		</li>
	</ul>
	<ul>
		Singles
		<li>
			<a class="sp-play-track" href="media/CHEKYO-CHEKYO-NEPATHYA.mp3" data-cover="media/audio.png" data-artist="Nepathe">
				<span class="track-meta">
					<span class="track-title">CHEKYO-CHEKYO</span>
					<span class="track-artists">Nepathe</span>
					<span class="track-counter">0</span>
				</span>
			</a>
			<div class="track-buttons"></div>
		</li>
	</ul>
	<br>



	<div id="scamp_player" class="sp-show-player"></div>

	<script src="https://connect.soundcloud.com/sdk.js"></script>
	<script type='text/javascript' src='js/soundmanager2-nodebug-jsmin.js'></script>
	<script type='text/javascript' src='js/iscroll.js'></script>
	<script type='text/javascript' src='js/jquery.scamp.player.min.js'></script>
	<script type='text/javascript'>
		<![CDATA[var scamp_vars = {"load_first_track":"1"}; ]]>
	</script>
	<script src="js/main.js"></script>

</body>


</html>