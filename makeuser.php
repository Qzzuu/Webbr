<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="webbr"; // Database name 
$tbl_name="members"; // Table name 



// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password");
if(! $con )
{
  die('Could not connect: ' . mysql_error());
} 

mysql_select_db("$db_name")or die("cannot select DB");

// username and passwords sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword'];
$mypassword2=$_POST['mypassword2'];
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$result = mysql_query("SELECT * FROM $tbl_name where username = '$myusername'");

if (mysql_num_rows($result) == FALSE){

	if ($mypassword2 == $mypassword) {

		
		$sql="INSERT INTO $tbl_name (username, password) 
		VALUES ('$myusername' , '$mypassword')";
		mysql_query($sql);

		echo "User Added";

	} else{
		header("registeruser.html");
	//echo"Your Passwords Did Not Match";
	} 
}
else{echo"Some One Has That User Name";}


?>