<?php
$con=@mysqli_connect("127.0.0.1","root","","mpdb") or die("ERROR");
mysqli_query($con, 'SET NAMES utf8');
$f1=$_GET["F01"];$f2=$_GET["F02"];$f3=$_GET["F03"];$f4=$_GET["F04"];$f5=$_GET["F05"];$f6=$_GET["F06"];
$sql="UPDATE TELEBOOK SET NAME='{$f1}',SNO='{$f2}',DEP='{$f3}',CLA='{$f4}',AGE='{$f5}' 
      WHERE SSNO='{$f6}'";

$rst = mysqli_query( $con, $sql );
if($rst) { echo "修改完成"; } else { echo "ER"; }
?>