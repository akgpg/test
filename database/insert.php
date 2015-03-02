<?php
include('conn.php');
$empid=$_POST['empid'];
$ename=$_POST['ename'];
$dname=$_POST['dname'];
$deptno=$_POST['deptno'];
$sal=$_POST['sal'];
$ins=0;

$req="INSERT INTO emp (empid, ename,dname,deptno,sal) VALUES('$empid','$ename','$dname','$deptno','$sal')";


mysql_query($req);
/*
{
 echo 'submitted successfully';
}
else
{
echo 'not submitted';
}*/

header('location:..\index.php');

?>