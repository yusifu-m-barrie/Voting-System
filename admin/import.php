<?php
if (isset($_POST['submit'])) {
	require_once 'conn.php';
	
	if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
		echo "<h1>" . "File ". $_FILES['filename']['name'] ." Uploaded successfully." . "</h1>";
		echo "<h2>Displaying contents:</h2>";
		readfile($_FILES['filename']['tmp_name']);
	}

	//Import uploaded file to Database
	$handle = fopen($_FILES['filename']['tmp_name'], "r");

	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		$conn->query("INSERT into voters (lastname,firstname,voters_id) values('$lastname','$firstname','$voters_id')");
		
		}

	fclose($handle);

	echo "<script type='text/javascript'>alert('Successfully imported a CSV file!');</script>";
	echo "<script>document.location='voters.php'</script>";
}

?>