<html>
<body bgcolor="#FFCC99">
<title>jstudy.com</title>
<?php

$id=$_REQUEST['id'];

include("conectdb.php");

$rs=mysql_query("select * from kg1 where id=$id",$con)or die("Query Error");

while($row=mysql_fetch_array($rs))
{

echo "<form action='updatestd1.php' method='post' enctype='multipart/form-data'>";
?><center>
name
<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>dob
<input type="date" name="dob" value="<?php echo $row['dob']; ?>"><br><br>class

<input type="text" name="cls" value="<?php echo $row['class']; ?>"><br><br>fees
<input type="number" name="fee" value="<?php echo $row['fee']; ?>"><br><br>pay fees

<input type="number" name="pay" value="<?php echo $row['pay']; ?>"><br><br>remain fees
<input type="number" name="ref" value="<?php echo $row['ref']; ?>"><br><br>



<input type="hidden" name="id" value="<?php echo $row['id'];?>"><br>
    

<?php
}
echo "<input type='submit' value='Update'>";


echo "</form>";

?>
</center>

</body>
</html>