<?php

include("conectdb.php");
//$name=$_REQUEST['name'];
$uid=$_REQUEST['id'];

mysql_query("delete from class2 where id=$uid",$con);

header("location:adminclass2.php");


?>