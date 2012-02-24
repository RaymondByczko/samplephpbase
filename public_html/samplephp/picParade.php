<?php
/*
 * Author: Raymond Byczko
 * file: samplephp/picParade.php
 * start date: 08-17-2009
 * purpose: To present a horizontal picture parade.  A php function
 * or class will allow us to do this.
 */

class CPicParade
{
	private $images = array();
	public function __construct()
	{
	}
	// addImage: adds an image to the picture parade.  The preferred sizes along
	// the x and y axis (read this as horizontal and vertical are given by x and y.
	public function addImage($fileImage, $x, $y)
	{
		$this->images[] = array('image'=>$fileImage, 'size_x'=>$x, 'size_y'=>$y);
	}
	public function numberImages()
	{
		return count($this->images);
	}
	public function allImagesExist()
	{
		$retBool2 = true;
		foreach ($this->images as $value)	
		{
			$fileName = $value['image'];
			// echo "${fileName}<br>";
			$rf = file_exists($fileName);
			if ($rf == false)
			{
				$retBool2 = false;
				echo "file does not exist: $fileName<br>";
			}
		}
		return $retBool2;
	}
	public function outputPicParade()
	{
		$retOutput = "<table><tr>";
		foreach ($this->images as $value)
		{
			$fileName = $value['image'];
			$xVal = $value['size_x'];
			$yVal = $value['size_y'];
			// TODO: implement technique to insure preparePic is only
			// called by picParade and cannot be called by the outside.
			// (using a shared secret if I am not mistaken. A hash of
			// x, y, fileName, shared secret yields a hash code. That
			// hash code is appended as a get parameter.  Someone can issue
			// the same exact url with x,y, fileName and hash code as
			// get values, but they cannot generated a new hash code
			// for different x,y, fileName, unless they have the
			// shared secret.)
			$imgPHPurl = "/samplephp/preparePic.php?newX=${xVal}&newY=${yVal}&fname=$fileName";
			$retOutput = "$retOutput<td><img src=\"$imgPHPurl\"></img></td>";
		}
		$retOutput = "$retOutput</tr></table>";
		return $retOutput;
	}
	private function preparePic($filename, $newX, $newY)
	{
		$height = $newY;
		$width = $newX;
		// Get new dimensions
		list($width_orig, $height_orig) = getimagesize($filename);

		$ratio_orig = $width_orig/$height_orig;

		if ($width/$height > $ratio_orig) {
		   $width = $height*$ratio_orig;
		} else {
		   $height = $width/$ratio_orig;
		}

		// Resample
		$image_p = imagecreatetruecolor($width, $height);
		$image = imagecreatefromjpeg($filename);
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

		// Output
		imagejpeg($image_p, null, 100);

	}

}

if (0)
{
$aPP = new CPicParade();
$aPP->addImage("/home/lunar51/public_html/samplephp/images1/HPIM6101.JPG", 250, 250);
$aPP->addImage("/home/lunar51/public_html/samplephp/images1/HPIM6102.JPG", 250, 250);
$num = $aPP->numberImages();
$wd = getcwd();
echo "wd=$wd<br>";
echo "num=$num<br>";
$retBoolAIE = $aPP->allImagesExist();
if ($retBoolAIE == true)
	echo "retBoolAIE=true<br>";
else
	echo "retBoolAIE=false<br>";
$retOutPP = $aPP->outputPicParade();
echo "$retOutPP<br>";
echo "fine<br>";
}

?>
