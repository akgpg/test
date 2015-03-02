$(document).ready(function() {
		document.getElementById("nav01").innerHTML =
"<ul id='menu'>" +
"<li><a href='http://localhost/test/Index.php'>Home</a></li>" +
"<li><a href='http://localhost/test/pages/data.php'>Data</a></li>" +
"<li><a href='http://localhost/test/pages/About.php'>About</a></li>" +
"<li><a href='http://localhost/test/pages/test.php'>Test</a></li>"+
"</ul>";

document.getElementById('footer').innerHTML="gkart is comming soon";

$('input[type="text"]').focus(function(){
	$(this).css('background-color','#FF0');
}).blur(function(){
	$(this).css('background-color','#fff');
});
	
});
//xmlHttp example
function showHint(str){
	
	//alert(str);
	if(str.length==0)
		{
			document.getElementById('payel').innerHTML='beloved';	
		}
	else
	{
			
	var xmlHttp;
	xmlHttp=new XMLHttpRequest();
	xmlHttp.onreadystatechange=function()
		{
			if(xmlHttp.readyState==4 && xmlHttp.status==200)
			{
				document.getElementById('payel').innerHTML=xmlHttp.responseText;
			};
		}
		
	xmlHttp.open('GET','simple_text.php?q='+str,true);
	xmlHttp.send();
	}
} //end of function showHint

// protect the entry of unwnated data in the form
function f()
{
	var f_name=document.forms['myform']['ename'].value;
		var f_dept=document.forms['myform']['dname'].value;
			var f_dno=document.forms['myform']['deptno'].value;
				var f_sal=document.forms['myform']['sal'].value;
		if(f_name==''||f_dept==''||f_dno=='')
		{
			if(f_name=='')
				{
					document.getElementById('f_span1').innerHTML="employee name can't be left as blank";
				}
			if(f_dept=='')
				{
					document.getElementById('f_span2').innerHTML="department name can't be left as blank";
				}
			if(f_dno=='')
				{
					document.getElementById('f_span3').innerHTML="department no can't be left as blank";
				}
			

			return false;
		}
					
}  //end of function f()
	
	


	