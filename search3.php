<?php
$con=@mysqli_connect("127.0.0.1","root","","mpdb") or die("NO");
mysqli_query($con, 'SET NAMES utf8');
$f1=$_GET["F01"];
$sql="SELECT NAME,SNO,DEP FROM TELEBOOK WHERE DEP LIKE '%{$f1}%'";
$rst = mysqli_query( $con, $sql );
if($rst)
{  $ss1=""; $ss2="";
   while( $row = mysqli_fetch_row($rst) )
   {  $ss1=$ss1.$row[0]." ".$row[1]." ".$row[2].","; }
   echo $ss1;
}	
?>  