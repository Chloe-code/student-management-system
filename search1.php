<?php
$con=@mysqli_connect("127.0.0.1","root","","mpdb") or die("NO");
mysqli_query($con, 'SET NAMES utf8');
$f1=$_GET["F01"];
$sql="SELECT NAME,SNO,DEP,CLA,AGE,SSNO FROM TELEBOOK WHERE SNO= '{$f1}'";
$rst = mysqli_query( $con, $sql );
if($rst)
{  $row = mysqli_fetch_row($rst);
   echo $row[0].",".$row[1].",".$row[2].",".$row[3].",".$row[4].",".$row[5]; }		  
?>