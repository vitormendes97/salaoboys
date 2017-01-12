<?php 

	class Pictures {

		public function __construct()
		{}


		public function getFile($path)
		{
			$files = array();

			$directory = scandir($path);

			unset($directory[0] , $directory[1]);

			foreach ($directory as $file_name) {
				$file = "/salaoboys/pictures/{$file_name}";

				array_push($files, $file);
			}
			return $files;
		}
	}