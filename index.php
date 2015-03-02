<! doctype html>
<html>
<head>
<title>my home page</title>
<script type='text/javascript' src='http://localhost/test/js/main.js'></script>
<script type='text/javascript' src='http://localhost/test/js/script.js'></script>
<link rel='stylesheet'  type='text/style' href='http://localhost/test/css/style.css'>
<script type='text/javascript'>


</script>


</head>
<body>
	<nav id="nav01"></nav>
	<div id='main'>
		<h1> welcome to our website</h1>
        <h1>main ingredient of the site is as bellow</h1>
        <p>how to create a website</p>
        <p>benifit of it</p>
        <p> Easy way to earning money by sitting on your home</p>   


<h3>Enter employee details here</h3>
<form id="theForm" name='myform'  onsubmit="return f()" action='http://localhost/test/database/insert.php' method ='post'>
    <div>
    <label for 'ename'>Employee Name</label>
    <input type='text' name='ename' id="ename"/><span id="f_span1" style='color:red'></span>
    </div>
    <div>
    <label for 'dname'>Department Name</label>
    <input type='text' name='dname' id="dname"/><span id="f_span2" style='color:red'></span>
    </div>
    <div>
    <label for 'deptno'>Department No</label>
    <input type='text' name='deptno' id="deptno"/><span id="f_span3" style='color:red'></span>
    </div>
    <div>
    <label for 'sal'>Salary</label>
    <input type='text' name='sal' id="sal"/><span id="f_span4" style='color:red'></span>
    </div>
    <div id='sbmt'>
	<input  type='submit' name='submit' value='  send  '/>
    </div>

</form>
<div id='f_submit'></div>
<form >
	<input type='text' onKeyUp="showHint(this.value)" name='query' size='20'/><input type='submit' name ='search' value='search'/>
</form>


<div id='payel'>beloved</div>
    
    </div>  <!---end of main div-->
	<div id='footer'></div>
</body>

</html>