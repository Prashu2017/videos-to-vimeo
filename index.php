<?php
namespace WebTyron;

?>
<html>
<title>Uploading Videos to Vimeo</title>
<head>
<link href="./assets/css/WebTyron-style.css" type="text/css"
	rel="stylesheet" />
<script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="./assets/js/video.js"></script>
<style>
.loader-icon {
	display: none;
}
</style>
</head>
<body>
	<div class="WebTyron-container">
		<h1>Uploading Videos to Vimeo</h1>
		<form id="frm-video-upload" class="WebTyron-form" method="post">
			<div class="WebTyron-row">
				<input type="file" name="video_file" />
			</div>
			<div class="WebTyron-row">
				<button id="btnUpload" type="submit">Upload</button>
				<img src="./img/loader.gif" class="loader-icon" id="loader-icon">
			</div>
		</form>
		<div id="WebTyron-message"></div>
	</div>
</body>
</html>