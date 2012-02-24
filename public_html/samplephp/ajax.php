<html>
<head>
<title>SamplePHP - Ajax<title>
<link rel=stylesheet type="text/css"
	href="http://www.lunarrays.com/samplephp/styles/gen_styles.css"
	title="SamplePHPStyles">
<script language="JavaScript" type="text/javascript" src="javascript/ajax.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/generalevents.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/ndfd_ajax.js"></script>
</head>
<body>
<div id="ajax_html">
<div id="ajax_header" style="width: 100px;height: 70px"></div>
<H1>Ajax examples by Ray Byczko</H1>
<table rules=none>

<tr>
<td class="leftc"><a href="ajax.php" onMouseOver="mouseOverDisplayImg('ajaxid')" >Ajax samples</a></td>
<td>some data</td>
<td id="output">Function</td>
<td>Input#1</td>
</tr>

<tr>
<td class="leftc"><a href="gimp.php" onMouseOver="mouseOverDisplayImg('gimpid')" >Gimp Samples</td>
<td>etc</td>
<td>etc2</td>
<td>etc3</td>
</tr>

<tr>
<form>
<td class="leftc"><a href="organicchem.php" onMouseOver="mouseOverDisplayImg('organicchemid')" >Organic Chemistry</td>
<td><input type="button" value='Help' onClick="getHelp('GET_MAX_TEMP')"></td>
<td><input type="button" value='Get Max Temp' onClick="getForecastData2(this.document)"></td>
<td><input id="idFutureDate" type=text size=10 maxlength=10 name="futureDate"></td>
<td id="maxtemp1">etc3</td>
</form>
</tr>

<tr>
<td class="leftc"><a href="index.php">Home</a></td>
<td><input type="button" value='Help' onClick="getHelp('GET_SERVER_TIME')"></td>
<td><input type="button" value='Get Server Time' onClick="getServerTime()"></td>
<td id="showtime">etc3</td>
</tr>

</table>

<table class="help_class">
<tr>
<td>Look for Help Here!</td>
</tr>
<tr>
<td id="help_here"></td>
</tr>
</table>


</div>
</body>
</html>
