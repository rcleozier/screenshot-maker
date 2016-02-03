<?php
	
	include 'imageresize.php';

	use \Eventviva\ImageResize;

	Class Cropper {

		private $devices = [
			'iPhone_35_portrait'        =>  [640, 920, 'iphone'],
			'iPhone_35_landscape'       =>  [960, 640, 'iphone'],
			'iPhone_47_portrait'        =>  [640, 1136, 'iphone'],
			'iPhone_47_landscape'       =>  [1136, 640, 'iphone'],
			'iPhone_55_portrait'        =>  [750, 1334, 'iphone'],
			'iPhone_55_plus_portrait'   =>  [1242, 2208, 'iphone'],

			'ipad_portrait' 		 	  =>  [768, 1024, 'ipad'],
			'ipad_landscape' 		 	  =>  [1024, 768, 'ipad'],
			'ipad_hires_portrait' 		  =>  [1536, 2048, 'ipad'],
			'ipad_hires_landscape' 		  =>  [2048, 1536, 'ipad'],

			'kindle_portrait_1' 		  =>  [800, 480, 'kindle'],
			'kindle_portrait_2' 		  =>  [1280, 800, 'kindle'],
			'kindle_portrait_3' 		  =>  [1920, 1200, 'kindle'],
			'kindle_portrait_3' 		  =>  [2560, 1600, 'kindle'],
		];

		private $rootDir;

		public function crop($images)
		{
			$this->makeRootDirectory();

			foreach($images as $image) {
				foreach ($this->devices as $key => $value) {
					$img = new ImageResize($image);
					$img->crop($value[0], $value[1], true);
					$this->saveImage($img, $key, $image, $value[2]);
					unset($img);
				}
			}

			$directoryFullPath = __DIR__ . "/downloads/$this->downloadDir";
			
			$this->zipDirectory($directoryFullPath);
			$this->cleanUp($directoryFullPath);

			return $this->downloadDir;
		}

		private function makeRootDirectory()
		{
			$this->downloadDir = $this->generateRandomString(25);

			$this->rootDir = __DIR__ . "/downloads/" . $this->downloadDir;

			mkdir($this->rootDir);
		}

		private function saveImage($img, $key, $image, $dir)
		{
			if (!is_dir("{$this->rootDir}/{$dir}")) {
				mkdir("{$this->rootDir}/{$dir}");
			}

			$image = str_replace("temp/", "", $image);
	
			$img->save("{$this->rootDir}/{$dir}/" .  $key . "_" . $image, IMAGETYPE_PNG, 5);
		}

		private function generateRandomString($length = 10) {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;
		}

		private function zipDirectory($destination)
		{
			exec("zip -r '$destination.zip' {$destination}");
		}

		private function cleanUp($destination)
		{
			exec("rm -rf {$destination}");
		}
	}

?>