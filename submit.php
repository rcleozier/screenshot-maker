<?php
	include 'images.php';
	$images = [];

	for($i=0; $i<count($_FILES['images']['name']); $i++) {
		$temp = "temp/";
		$temp = $temp.basename($_FILES['images']['name'][$i]);
        move_uploaded_file($_FILES['images']['tmp_name'][$i], $temp);

		array_push($images, $temp);
	}

	$cropper = New Cropper();
	$directory = $cropper->crop($images);
	var_dump($directory); exit;
?>