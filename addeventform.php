<?php
$name=$_REQUEST['event'];
$email=$_REQUEST['date'];
$mobile=$_REQUEST['des'];

//$pass=$_REQUEST['passw'];
//$pp=$_FILES['pic'];

//move_uploaded_file($_FILES['pic']['tmp_name'],"img2/".$_FILES['pic']['name']);
//echo $photo="img2/".$_FILES['pic']['name'];

$pic=$_FILES['pic'];

$pname=trim($pic['name']);

move_uploaded_file($pic['tmp_name'],"sphoto\\".$pname);



$c=mysql_connect("localhost","root","");
mysql_select_db("awanti",$c);
mysql_query("insert into event(evname,evdate,evdesc,image) values ('$name','$email','$mobile','$pname')",$c);

header("location:showevent.php");
?>