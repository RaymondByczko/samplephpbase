<html>
<head>
<title>SamplePHP - Google Code Playground</title>
<link rel=stylesheet type="text/css"
	href="http://www.lunarrays.com/samplephp/styles/gen_styles.css"
	title="SamplePHPStyles">
<script language="JavaScript" type="text/javascript" src="javascript/generalevents.js"></script>
</head>
<body>
<div id="gcpg_php">
<H1>Home for samplePHP by Ray Byczko</H1>


<strong><div id="output">Mouse over:</div></strong>
<table>
<tr>
<td>
<table rules=none>
<tr>
<td class="leftc"><a href="ajax.php" onMouseOver="mouseOverDisplayImg('ajaxid')" >Ajax samples</a></td>
</tr>

<tr>
<td class="leftc"><a href="gimp.php" onMouseOver="mouseOverDisplayImg('gimpid')" >Gimp Samples</td>
</tr>

<tr>
<td class="leftc"><a href="organicchem.php" onMouseOver="mouseOverDisplayImg('organicchemid')" >Organic Chemistry</td>
</tr>

<tr>
<td class="leftc"><a href="googlecodeplayground.php" onMouseOver="mouseOverDisplayImg('googlecodeplayground')" >Google Code Playground</td>
</tr>


</table>
</td>
<td>
<?php include "googlemapembedded.php"; ?>
<body onunload="GUnload_lli()"><div id="map_canvas" style="width: 500px; height: 300px"></div></body>
</td>
</tr>
<tr>
<td></td>
<td>
<input type="button" value='MapIt!' onClick="initialize_lli('map_canvas', document.getElementById('lat_id').value, document.getElementById('lon_id').value, document.getElementById('maptype_id').checked)">
latitude<input type="text" id="lat_id" size=10>
longitude<input type="text" id="lon_id" size=10>
<input type=checkbox id="maptype_id" name="mapType" value="satellite"> Satellite
</td>
</tr>
</table>
</div>
</body>
</html>

