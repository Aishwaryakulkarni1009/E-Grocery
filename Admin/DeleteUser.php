
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Id=$_GET['AdminId'];
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root",'','shopping');
	// Select Database
	 
	// Specify the query to Insert Record
	$sql = "delete from Admin_Master where AdminId='".$Id."'";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("User Deleted Succesfully");window.location=\'User.php\';</script>';

?>
</body>
</html>
