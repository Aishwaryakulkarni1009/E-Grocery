
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Id=$_GET['CatId'];
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root",'','shopping');
	// Select Database
	 
	// Specify the query to Insert Record
	$sql = "delete from Category_Master where CategoryId='".$Id."'";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Category Deleted Succesfully");window.location=\'Category.php\';</script>';

?>
</body>
</html>
