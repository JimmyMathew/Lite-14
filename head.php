<?php include 'config.php'; ?>
<?php

session_start();
if($_SESSION['users'] == ""){
header("location:login.php");
}
?>
<table align ="left" width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td class="logo" bgcolor="#F63">Loyola Information Technology Extravaganza 2014</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    
    <td width="88%" class="texts">Welcome <?php echo $_SESSION['teamname']; ?>, <?php echo $_SESSION['type']; ?>, <?php echo date("m/d/Y"); ?>, <?php $dateget=getdate(strtotime(date("m/d/Y"))); echo $dateget['weekday']; ?> | <a href="logout.php">Sign Out</a></td>
    <td width="7%" align="right" class="texts"><img src="images/logo.png" width="143" height="95" /></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="10" cellspacing="0" class="menu">
  <tr>
  <td>
   <?php 
if($_SESSION['type'] == "Administrator")
{

echo"<li class='normal'><a href='registration.php?notification=false'>Registration</a></li>";
echo"<li class='normal'><a href='teamgen.php?notification=false'>Team Generation</a></li>";
echo"<li class='normal'><a href='add-member.php?notification=false'>Add Member</a></li>";
echo"<li class='normal'><a href='member-list.php?notification=false&search=no'>View Members</a></li>";
echo"<li class='normal'><a href='stureport.php?notification=false&search=no'>Students Report</a></li>";
echo"<li class='normal'><a href='report.php?notification=false&search=no'>Events Report</a></li>";
echo"<li class='normal'><a href='reverse.php?notification=false'>Reverse Coding</a></li>";
echo"<li class='normal'><a href='quiz.php?notification=false'>Quiz</a></li>";
echo"<li class='normal'><a href='web.php?notification=false'>Web Design</a></li>";
echo"<li class='normal'><a href='swmarket.php?notification=false'>Software Marketing</a></li>";
echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
}
else if($_SESSION['type'] == "Staff")
{

echo"<li class='normal'><a href='registration.php?notification=false'>Registration</a></li>";
echo"<li class='normal'><a href='teamgen.php?notification=false'>Team Generation</a></li>";
echo"<li class='normal'><a href='stureport.php?notification=false&search=no'>Students Report</a></li>";
echo"<li class='normal'><a href='report.php?notification=false&search=no'>Events Report</a></li>";
echo"<li class='normal'><a href='reverse.php?notification=false'>Reverse Coding</a></li>";
echo"<li class='normal'><a href='quiz.php?notification=false'>Quiz</a></li>";
echo"<li class='normal'><a href='web.php?notification=false'>Web Design</a></li>";
echo"<li class='normal'><a href='swmarket.php?notification=false'>Software Marketing</a></li>";
echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
}
else if($_SESSION['type'] == "Registration")
{

echo"<li class='normal'><a href='registration.php?notification=false'>Registration</a></li>";
echo"<li class='normal'><a href='teamgen.php?notification=false'>Team Generation</a></li>";
echo"<li class='normal'><a href='stureport.php?notification=false&search=no'>Students Report</a></li>";
echo"<li class='normal'><a href='report.php?notification=false&search=no'>Events Report</a></li>";
echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
}

?>

<?php

if($_SESSION['type'] == "Web Design")
{
echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
echo"<li class='normal'><a href='web.php?notification=false'>Web Design</a></li>";
}
else if($_SESSION['type'] == "Reverse Coding")
{
echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
echo"<li class='normal'><a href='reverse.php?notification=false'>Reverse Coding</a></li>";
}
else if($_SESSION['type'] == "Quiz")
{
echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
echo"<li class='normal'><a href='quiz.php?notification=false'>Quiz</a></li>";
}
else if($_SESSION['type'] == "Software Marketing")
{
echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
echo"<li class='normal'><a href='swmarket.php?notification=false'>Software Marketing</a></li>";
}

?>
</td>
</tr>
</table>
