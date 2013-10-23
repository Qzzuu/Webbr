<?php
session_start();
if($user= $_SESSION['myusername']){
header("location:createstage.php");
}
?>

<html>
<head>
		<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
(Login Successful)
<h1> Create Stage</h1>
<h2> Select No. Of Pages</h2>
<h2> Select Your Layout</h2>
<h2> Select Your Colours</h2>
<h2> Font Faimly</h2>

</body>
</html>