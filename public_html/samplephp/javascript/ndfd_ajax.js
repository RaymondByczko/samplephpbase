/*
function getXMLHttpRequest() {
	try {
		req = new XMLHttpRequest();
	} catch(err1)
	{
		try {
			req = ActiveXObject("Msxml2.XMLHTTP");
		} catch (err2)
		{
			try {
				req = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (err3)
			{		
				req = false;
			}
		}
	}
	return req;
}
*/

// We are relying on the fact ajax.js is included before this file, to provide
// getXMLHttpRequest().

// var http = getXMLHttpRequest();


function formSoapMsg() {
var retSoapMsg = '<?xml version="1.0"?>' + 
'<SOAP-ENV:Envelope SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">' +
'<SOAP-ENV:Body>' +
'<ns3591:NDFDgen>' + 
'<latitude xsi:type="xsd:string">38.99</latitude>' +
'<longitude xsi:type="xsd:string">-77.01</longitude>' +
'<product xsi:type="xsd:string">time-series</product>' +
'<startTime xsi:type="xsd:string">2004-01-01T00:00:00</startTime>' +
'<endTime xsi:type="xsd:string">2012-02-12T00:00:00</endTime>' +
'<weatherParameters>' +
'<maxt xsi:type="xsd:boolean">1</maxt>' +
'<mint xsi:type="xsd:boolean">0</mint>' +
'<temp xsi:type="xsd:boolean">0</temp>' +
'<dew xsi:type="xsd:boolean">0</dew>' +
'<pop12 xsi:type="xsd:boolean">0</pop12>' +
'<qpf xsi:type="xsd:boolean">0</qpf>' +
'<sky xsi:type="xsd:boolean">0</sky>' +
'<snow xsi:type="xsd:boolean">0</snow>' +
'<wspd xsi:type="xsd:boolean">0</wspd>' +
'<wdir xsi:type="xsd:boolean">0</wdir>' +
'<wx xsi:type="xsd:boolean">0</wx>' +
'<waveh xsi:type="xsd:boolean">0</waveh>' +
'<icons xsi:type="xsd:boolean">0</icons>' +
'<rh xsi:type="xsd:boolean">0</rh>' +
'<appt xsi:type="xsd:boolean">0</appt>' +
'<incw34 xsi:type="xsd:boolean">0</incw34>' +
'<incw50 xsi:type="xsd:boolean">0</incw50>' +
'<incw64 xsi:type="xsd:boolean">0</incw64>' +
'<cumw34 xsi:type="xsd:boolean">0</cumw34>' +
'<cumw50 xsi:type="xsd:boolean">0</cumw50>' +
'<cumw64 xsi:type="xsd:boolean">0</cumw64>' +
'<conhazo xsi:type="xsd:boolean">0</conhazo>' +
'<ptornado xsi:type="xsd:boolean">0</ptornado>' +
'<phail xsi:type="xsd:boolean">0</phail>' +
'<ptstmwinds xsi:type="xsd:boolean">0</ptstmwinds>' +
'<pxtornado xsi:type="xsd:boolean">0</pxtornado>' +
'<pxhail xsi:type="xsd:boolean">0</pxhail>' +
'<pxtstmwinds xsi:type="xsd:boolean">0</pxtstmwinds>' +
'<ptotsvrtstm xsi:type="xsd:boolean">0</ptotsvrtstm>' +
'<pxtotsvrtstm xsi:type="xsd:boolean">0</pxtotsvrtstm>' +
'<tmpabv14d xsi:type="xsd:boolean">0</tmpabv14d>' +
'<tmpblw14d xsi:type="xsd:boolean">0</tmpblw14d>' +
'<tmpabv30d xsi:type="xsd:boolean">0</tmpabv30d>' +
'<tmpblw30d xsi:type="xsd:boolean">0</tmpblw30d>' +
'<tmpabv90d xsi:type="xsd:boolean">0</tmpabv90d>' +
'<tmpblw90d xsi:type="xsd:boolean">0</tmpblw90d>' +
'<prcpabv14d xsi:type="xsd:boolean">0</prcpabv14d>' +
'<prcpblw14d xsi:type="xsd:boolean">0</prcpblw14d>' +
'<prcpabv30d xsi:type="xsd:boolean">0</prcpabv30d>' +
'<prcpblw30d xsi:type="xsd:boolean">0</prcpblw30d>' +
'<prcpabv90d xsi:type="xsd:boolean">0</prcpabv90d>' +
'<prcpblw90d xsi:type="xsd:boolean">0</prcpblw90d>' +
'<precipa_r xsi:type="xsd:boolean">0</precipa_r>' +
'<sky_r xsi:type="xsd:boolean">0</sky_r>' +
'<td_r xsi:type="xsd:boolean">0</td_r>' +
'<temp_r xsi:type="xsd:boolean">0</temp_r>' +
'<wdir_r xsi:type="xsd:boolean">0</wdir_r>' +
'<wspd_r xsi:type="xsd:boolean">0</wspd_r>' +
'<wgust xsi:type="xsd:boolean">0</wgust>' +
'</weatherParameters>' +
'</ns3591:NDFDgen>' +
'</SOAP-ENV:Body>' +
'</SOAP-ENV:Envelope>'; 
return retSoapMsg;
}

function getForecastData() {
	// var serverURL = "http://www.weather.gov/forecasts/xml/SOAP_server/ndfdXMLserver.php";

	var serverURL = "http://www.weather.gov/forecasts/xml/SOAP_server/";
	http.open("POST", serverURL, true);
	http.onreadystatechange = useHttpResponseForecast;
	http.setRequestHeader("Content-Type", "text/xml");
	var soapMsg = formSoapMsg();
	http.send(soapMsg);
}

function getForecastData2(f) {
	var myurl = '/samplephp/getForecastData.php';
	var fdd;
	myRand = parseInt(Math.random()*999999999999999);

	// var modurl = myurl+"?rand="+myRand;

	//document.getElementById('maxtemp1').innerHTML;
	// var theFD = document.getElementById('idFutureDate').value;
	//var theFD = this.document.getElementById('idFutureDate').value;

	fdd = document.getElementById('idFutureDate').value;
	// fdd = '2009-08-13';
	// var theFD = document.forms['futureDate'].value;
	// theFD = f.elements["futureDate"].value;
	// var modurl = myurl+ "?lat=41.83&lon=-73.13&startDate=2009-08-12T00:00:00&numDays=1&format=24%20hourly&rand="+myRand;

	var modurl = myurl+ "?lat=41.83&lon=-73.13&startDate=" +fdd+"T00:00:00&numDays=1&format=24%20hourly&rand="+myRand;
	http.open("GET", modurl, true);
	http.onreadystatechange = useHttpResponseForecast;
	http.send(null);
}

function useHttpResponseForecast() {
	if (http.readyState == 4)
	{
		if (http.status == 200)
		{
			var maxTempValue = http.responseXML.getElementsByTagName("temperature")[0];
			var maxTempValue2 = maxTempValue.getElementsByTagName("value")[0];
			document.getElementById('maxtemp1').innerHTML = maxTempValue2.childNodes[0].nodeValue;
		}
	}	
	else
	{
		document.getElementById('maxtemp1').innerHTML = '<img src="anim.gif">';
	}
}

