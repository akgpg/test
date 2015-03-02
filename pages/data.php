<!DOCTYPE html>
<html>

<head>
  <title>Customers</title>
<script type='text/javascript' src='http://localhost/test/js/main.js'></script>
<script type='text/javascript' src='http://localhost/test/js/script.js'></script>
<link rel='stylesheet'  type='text/style' href='http://localhost/test/css/style.css'>

</head>

<body>
<div id="nav01"></div>
<div id='main'>
<?php
    include '../database/conn.php';
		$query='select * from emp';
	$result=mysql_query($query);
	echo'<table>';
	echo '<tr id="tdcolor"><td>employee id</td><td>employee name</td><td>department</td><td>department No</td><td>Salary</td></tr>';
	while($employee=mysql_fetch_array($result))
	  {
	    echo ('<tr><td>'.$employee[empid].'</td><td>'.$employee[ename].'</td><td'.$employee[sal].'</td><td>'.$employee[dname].'</td><td>'.$employee[deptno].'</td><td>'.$employee[sal].'</td></tr>');
	  }
	 echo '</table>';
?>
</div>
<div id='footer'></div>
</body>
</html>