<?php include 'config.php'; ?>
<?php
$name=$_GET["page"];
$delids=$_GET["ids"];
?>
<?php
if($name == "member"){
$sql="DELETE FROM persons WHERE id='$delids'";
$result=mysqli_query($conn,$sql);
header( 'Location: member-list.php?notification=true' );
}
?>
<?php

if($name == "registration")
{
$sql="DELETE FROM registration WHERE id='$delids'";
$result=mysqli_query($conn,$sql);
header( 'Location: stureport.php?notification=true' );
}
?>
<?php

if($name == "report")
{
$sql="DELETE FROM persons WHERE id='$delids'";
$result=mysqli_query($conn,$sql);
header( 'Location: report.php?notification=true' );
}
?>

<?php
/*
if($name == "government"){
$sql="DELETE FROM government WHERE id='$delids'";
$result=mysql_query($sql);
header( 'Location: government-list.php?notification=true' );
}
?>
<?php
mysql_close($conn);
*/
?>