<?php
$con=@mysqli_connect("127.0.0.1","root","","mpdb") or die("ERROR");
mysqli_query($con, 'SET NAMES utf8');
$f1=$_GET["F01"];
$sql="DELETE FROM TELEBOOK WHERE SSNO='{$f1}'";
$rst = mysqli_query( $con, $sql );
if($rst) { echo "刪除完成"; } else { echo "ER"; }
?>