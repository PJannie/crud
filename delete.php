<?php 
include "config.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write delete query
	$sql = "DELETE FROM `users` WHERE `id`='$user_id'";

	// Execute the query

	$result = $conn->query($sql);
	$result = $conn->query($sql2);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
		header("Location: index.php");
		exit();
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>
