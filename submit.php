<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	include 'images.php';
	include 'config.php';

	$images = [];

	for($i=0; $i<count($_FILES['images']['name']); $i++) {
		$temp = "temp/";
		$temp = $temp.basename($_FILES['images']['name'][$i]);
		move_uploaded_file($_FILES['images']['tmp_name'][$i], $temp);

		array_push($images, $temp);
	}

	$cropper = New Cropper();
	$directory = $cropper->crop($images);
?>

<html>
	<head>
		<title> AppScreenshotSize.com | App Screenshot Resizer</title>
		<link rel="stylesheet" type="text/css" href="node_modules/milligram/dist/milligram.min.css">
	</head>

	<body>

	<div class="container">

	<div class="row">
		<div class="column">
			<h1> Resize Complete </h1>
		</div>
	</div>


	<div class="row">
	    <div class="column">
			<a href="<?=BASE_URL?>downloads/<?=$directory?>.zip" class="button"> Download </a>
		</div>
	</div>

	</div>
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-18545304-10', 'appscreenshotsize.com');
	ga('send', 'pageview');
	</script>")
	</body>
</html>