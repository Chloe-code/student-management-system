<?php
$con=@mysqli_connect("127.0.0.1","root","","mpdb") or die("NO");
mysqli_query($con, 'SET NAMES utf8');
$f1=$_GET["F01"]; $f2=$_GET["F02"]; $f3=$_GET["F03"]; $f4=$_GET["F04"]; $f5=$_GET["F05"];
$sql="INSERT INTO TELEBOOK (NAME,SNO,DEP,CLA,AGE) VALUES
      ('{$f1}','{$f2}','{$f3}','{$f4}','{$f5}')";
$rst = mysqli_query( $con, $sql );
if($rst) { echo "新增成功"; } else { echo "NO"; }
?>