<?Php
$sid=$_REQUEST['code'];
$name=$_REQUEST['sname'];

$father=$_REQUEST['faname'];

$mother=$_REQUEST['moname'];

$reli=$_REQUEST['rel'];

$cat=$_REQUEST['ctg'];

$d=$_REQUEST['dob'];
$bld=$_REQUEST['blood'];

$cl=$_REQUEST['class'];

$ad=$_REQUEST['address'];

$d=$_REQUEST['addate'];

$tf=$_REQUEST['fee'];

$pa=$_REQUEST['pay'];

$re=$_REQUEST['remain'];


$nu=$_REQUEST['num'];


$pic=$_FILES['photo'];

$pname=trim($pic['name']);

move_uploaded_file($pic['tmp_name'],"sphoto\\".$pname);


//$p=$_FILES['photo'];

//$sname=trim($p['name']);

//move_uploaded_file($p['tmp_name'],"sphoto\\".$sname);


$connect=mysql_connect("localhost","root","");
mysql_select_db("awanti",$connect);

mysql_query("insert into kg2(stdcode,name,fname,mname,rlg,cate,dob,bloodgrp,class,address,adsdate,fee,pay,ref,contact,img) values('$sid','$name','$father','$mother','$reli','$cat','$d','$bld','$cl','$ad','$d','$tf','$pa','$re','$nu','$pname')",$connect);


header("location:adminkg2dt.php");
?>
<title>jstudy.com</title>
