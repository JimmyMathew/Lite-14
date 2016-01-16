<?php include 'config.php'; ?>
<?php
$name=$_GET["page"];
?>
<?php
if($name == "member")
{
/*define ('MAX_FILE_SIZE', 1024 * 768);

if (array_key_exists('upload', $_POST)) 
{
  // define constant for upload folder
  define('UPLOAD_DIR', 'member/');
  // replace any spaces in original filename with underscores
  $file = str_replace(' ', '_', time()."_".$_FILES['phototxt']['name']);
  // create an array of permitted image types
  $permitted = array('image/gif', 'image/jpeg', 'image/pjpeg',
'image/png');
  
  // upload if file is OK
  if (in_array($_FILES['phototxt']['type'], $permitted)
      && $_FILES['phototxt']['size'] > 0 
      && $_FILES['phototxt']['size'] <= MAX_FILE_SIZE) {
    switch($_FILES['phototxt']['error']) {
      case 0:
        // check if a file of the same name has been uploaded
        if (!file_exists(UPLOAD_DIR . $file)) {
          // move the file to the upload folder and rename it
          $success =
move_uploaded_file($_FILES['phototxt']['tmp_name'], UPLOAD_DIR .
$file);
        } else {
          echo $result = 'A file of the same name already exists.';
        }
        if ($success) {
          echo $result = "$file uploaded successfully.";
        } else {
          echo $result = "Error uploading $file. Please try again.";
        }
        break;
      case 3:
      case 6:
      case 7:
      case 8:
        echo $result = "Error uploading $file. Please try again.";
        break;
      case 4:
        echo $result = "You didn't select a file to be uploaded.";
    }
  } else {
    echo $result = "$file is either too big or not an image.";
  }
}*/

$sql = "INSERT INTO persons".
"(team,type,username,password)".

 "VALUES (' $_POST[nametxt]','$_POST[type]','$_POST[un]','$_POST[pw]')";
	   $retval = mysqli_query($conn,$sql);
	  header( 'Location: add-member.php?notification=true' );
}

?>
<?php
if($name == "student"){

$sql = "INSERT INTO registration".
 "(name,college,email,mobile,event1,event2)".
 "VALUES (' $_POST[nametxt]','$_POST[colltxt]','$_POST[email]','$_POST[mobile]','$_POST[event1]','$_POST[event2]')";
	   $retval = mysqli_query($conn,$sql);
	  header( 'Location: registration.php?notification=true' );
}
?>

<?php
if($name == "team"){
$pos=strpos($_POST[memtxt],",");
$mem=substr($_POST[memtxt],0,$pos);
$pos1=strpos($_POST[memtxt2],",");
$mem1=substr($_POST[memtxt2],0,$pos1);
$sql = "INSERT INTO persons".
"(team,member1,member2,type,username,password)".
"VALUES ('$_POST[teamtxt]',' $mem',' $mem1','$_POST[type]','$_POST[un]','$_POST[pw]')";
	   $retval = mysqli_query($conn,$sql);
	  header( 'Location: teamgen.php?notification=true' );
}
?>