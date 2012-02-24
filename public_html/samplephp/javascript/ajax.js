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

var http = getXMLHttpRequest();

function getServerTime() {
	var myurl = '/samplephp/telltimeXML.php';
	myRand = parseInt(Math.random()*999999999999999);
	var modurl = myurl+"?rand="+myRand;
	http.open("GET", modurl, true);
	http.onreadystatechange = useHttpResponse;
	http.send(null);
}

function useHttpResponse() {
	if (http.readyState == 4)
	{
		if (http.status == 200)
		{
			var timeValue = http.responseXML.getElementsByTagName("timenow")[0];
			document.getElementById('showtime').innerHTML = timeValue.childNodes[0].nodeValue;
		}
	}	
	else
	{
		document.getElementById('showtime').innerHTML = '<img src="anim.gif">';
	}
}

			
