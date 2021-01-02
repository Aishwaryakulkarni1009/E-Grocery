<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Id=$_GET['OfferId'];
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root",'','shopping');
	// Select Database
	 
	// Specify the query to Insert Record
	$sql = "delete from Offer_Master where OfferId='".$Id."'";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Offer Deleted Succesfully");window.location=\'Offers.php\';</script>';

?>
</body>
</html>
