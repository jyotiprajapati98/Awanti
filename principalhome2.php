<body>
<?php
include("headsimple2.php");
?>

<style>
#table
{
	margin-top:0px;
	text-decoration:none;
	color:#F00;
	margin-top:20px;
}
</style>
<div id="table">
<center><table border="1" datapagesize="1000" bgcolor="#FFFFCC" cellpadding="5" cellspacing="5">
<tr>
<th><font color="#FF0000">S.no</th>
<th><font color="#FF0000">Name</th>
<th><font color="#FF0000">Qualification</th>
<th><font color="#FF0000">Joining Date</th>

<th><font color="#FF0000">Image</th>
<!--<th>Edit</th>
<th>Delete</th>-->
</tr>

<?php
$con=mysql_connect("localhost","root","");

mysql_select_db("awanti",$con);

$qu=mysql_query("select * from principal",$con) or die("Query Error");

$count=0;
while($row=mysql_fetch_array($qu))
{
	$count++;
	$id=$row['sno'];
	$name=$row['tname'];
	//$fname=$row['fname'];
	//$mname=$row['mname'];
	//$add=$row['address'];
	$q=$row['quali'];
	$cont=$row['date'];
	
	$img=$row['image'];
	echo"<tr>
	<td>$count</td>
	<td>$name</td>
	<td>$q</td>
	<td>$cont</td>
	
	
	<td><img src='sphoto/$img' height='150' width='150'></td>

	</tr>";
}
?>
</table></center>
</div></body>