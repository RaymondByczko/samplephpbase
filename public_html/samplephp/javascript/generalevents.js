function mouseOverDisplayImg(idOver)
{
	if (idOver == "ajaxid")
	{
		document.getElementById('output').innerHTML = 'ajax here';
	}	
	if (idOver == "gimpid")
	{
		document.getElementById('output').innerHTML = 'gimp here';
	}	
	if (idOver == "organicchemid")
	{
		document.getElementById('output').innerHTML = 'org chem here';
	}	
}

function getHelp(context)
{
	if (context == "GET_MAX_TEMP")
	{
		document.getElementById('help_here').innerHTML = '<br><br>' +
			'This function exercises the National Data Forecast Database.' +
			'<br>' +
			'Enter date in future. Past will generate an error.' +
			'<br>' +
			'Format is: YYYY-MM-DD';
	}
	if (context == "GET_SERVER_TIME")
	{
		document.getElementById('help_here').innerHTML = '<br><br>Just click Get Server Time.';
	}

}
