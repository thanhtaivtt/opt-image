<?php
	function opt(?string $file, ?string $outFile,?int $opt) 
	{
		if(is_null($outFile)){
			$outFile = 'opt.jpg';
		}
		[$w,$h] = @getimagesize($file);
		if(empty($w) || empty($h)) {
			return false;
		}
		$src = imagecreatefromjpeg($file);
		$tmp = imagecreatetruecolor($w,$h);
		imagecopyresampled($tmp,$src,0,0,0,0,$w,$h,$w,$h);
		imagejpeg($tmp,$outFile,$opt);
		imagedestroy($tmp);
		return  $outFile;
	}
