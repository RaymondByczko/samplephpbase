<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SamplePHP - Home</title>
</head>
<body>
<div id="body_id">
<div id="top_bar" style="position: absolute; left:0px; top:0px; width: 600px; height: 100px; background: red">
<?php
include 'picParade.php';
$aPP = new CPicParade();
$aPP->addImage("/home/lunar51/public_html/samplephp/images1/HPIM6101.JPG", 95, 95);
$aPP->addImage("/home/lunar51/public_html/samplephp/images1/HPIM6102.JPG", 95, 95);
$aPP->addImage("/home/lunar51/public_html/samplephp/images1/HPIM5449.JPG", 95, 95);
$aPP->addImage("/home/lunar51/public_html/samplephp/images1/HPIM5453.JPG", 95, 95);
$aPP->addImage("/home/lunar51/public_html/samplephp/images1/HPIM3316.JPG", 95, 95);
$aPP->addImage("/home/lunar51/public_html/samplephp/images1/HPIM1640.JPG", 95, 95);

$num = $aPP->numberImages();
$wd = getcwd();
/* echo "wd=$wd<br>"; */
/* echo "num=$num<br>"; */
$retBoolAIE = $aPP->allImagesExist();
//if ($retBoolAIE == true)
	// echo "retBoolAIE=true<br>";
//else
	// echo "retBoolAIE=false<br>";
$retOutPP = $aPP->outputPicParade();
echo "$retOutPP<br>";
// echo "fine<br>";

?>
</div>
<div id="left_menu" style="position: absolute; left:0px; top: 101px; width:200px; height: 300px; background: blue">

<table rules=none>
<tr>
<td><a href="ajaxNew.php" style="color:black" >Ajax samples</a></td>
</tr>

<tr>
<td><a href="googleNew.php" style="color:black" >Google samples</a></td>
</tr>

<tr>
<td><a href="gimpNew.php" style="color:black" >Gimp samples</a></td>
</tr>
<tr>
<td><a href="biologyNew.php" style="color:black" >Biology samples</a></td>
</tr>
</table>
</div>
<div id="work_area" style="position: absolute; left: 201px; top: 101px; width: 400px; height: 300px; background: green">
<div style="position: absolute; left: 15px; top: 15px; width: 370px; height: 280px">
This is the Work Area.  Here the content will change based on the selection made
to the left. The bottom screen is used to see some of the code behind this website.
Enjoy! Ray Byczko
</div>
</div>
</div>
<div id="bottom_bar" style="position: absolute; left:0px; top:402px; width: 600px; height: 100px; background: red">
Bottom Bar
</div>
</body>
</html>
