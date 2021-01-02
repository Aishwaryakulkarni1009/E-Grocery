
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Id=$_GET['FeedbackId'];
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root",'','shopping');
	// Select Database
	 
	// Specify the query to Insert Record
	$sql = "delete from Feedback_Master where FeedbackId='".$Id."'";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Feedback Deleted Succesfully");window.location=\'Feedback.php\';</script>';

?>
</body>
</html>
