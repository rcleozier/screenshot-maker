<html>
	<head>
		<meta encoding="UTF-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> AppScreenshotSize.com | App Screenshot Resizer</title>
		<link rel="stylesheet" type="text/css" href="node_modules/milligram/dist/milligram.min.css">
		<meta name="description" content="AppScreenshotSize.com helps designers, developers and project managers resize all app screenshots for all IOS and Android sizes! Drop in your screenshots, we'll resize them all and send you to the download links afterwards.">
		<meta name="copyright" content="AppScreenshotSize.com">
		<meta name="robots" content="all">
		<meta name="author" content="Robbins Cleozier">
		<meta name="keywords" content="app, screenshots, appscreenshots, resize, generator, online, website, resizer, web">
	</head>

	<body>
	<div class="container">
	<div class="row">
		<div class="column">
			<h1> App Screenshot Resizer</h1>
			<h4> 
				Upload your screenshots, we'll resize them to all the sizes below. Save time sizing screenshots for each App store.
				<br/> The image is uploaded and the icons are generated automatically.
			</h4>
		</div>
	</div>
	<br/>
	<div class="row">
	    <div class="column">
	    	<h4> Iphone </h4>
	    	<ul>
			  <li>640 x 920 (Portrait) </li>
			  <li>960 x 640 (Landscape)</li>
			  <li>640 x 1136 (Portrait)</li>
			  <li>1136 x 640 (Landscape)</li>
			  <li>750 x 1334 (Portrait)</li>
			  <li>1242 x 2208 (Portrait)</li>
			</ul>
	    </div>
	    <div class="column">
	    	<h4> Ipad </h4>
	    	<ul>
			  <li>768 x 1024 (Portrait) </li>
			  <li>1024 x 768 (Landscape)</li>
			  <li>1536 x 2048 (Portrait) </li>
			  <li>2048 x 1536 (Landscape)</li>
			</ul>
	    </div>
	    <div class="column">
	    	<h4> Kindle </h4>
	    	<ul>
			  <li>800 x 480  </li>
			  <li>1280 x 800 </li>
			  <li>1920 x 1200  </li>
			  <li>2560 x 600 </li>
			</ul>
	    </div>
	  </div>
	 <div class="row">
	 	<div class="column column-75 column-offset-25">  
			<form action="submit.php" method="POST" enctype="multipart/form-data">
			  Select images: <input type="file" name="images[]" multiple> <br/>
			  <input type="submit">
			</form>
		</div>
	</div>
	<div class="row">
		<div class="column"> &copy; <?php echo date("Y") ?> AppScreenshotSize.com </div> 
	</div>
	</body>
</html>