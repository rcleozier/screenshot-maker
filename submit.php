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
</body>
</html>