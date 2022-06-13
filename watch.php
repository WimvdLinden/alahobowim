<?php $homeLoc = "./"; $isDocked = true; ?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet" />
	<link rel="stylesheet" href="scss/core.css">
    <link rel="stylesheet" href="css/video.min.css">
    <style>
        #my-video{
            width: 100%;
            height: 100%;
        }
        main.content{
            height: 100vh;
        }
    </style>
	<title></title>
</head>
<body>
<?php require_once"partial/navigation.partial.php"; if (!$_SESSION["logged"]) header("Location: ../login");?>
<main class="content" style="padding: 0;">
	<video
		id="my-video"
		class="video-js"
		controls
		preload="auto"
		poster="img/hobo-transparent.png"
		data-setup="{}"
	>
		<source src="https://cdn.discordapp.com/attachments/284828648056422401/955038344167981056/846064_szybki-poradnik-na-kaczke.mp4" type="video/mp4"/>
		<p class="vjs-no-js">
			To view this video please enable JavaScript, and consider upgrading to a
			web browser that
			<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
		</p>
	</video>
</main>
<script src="https://vjs.zencdn.net/7.18.1/video.min.js"></script>
<script src="js/navigation.js"></script>
</body>
</html>