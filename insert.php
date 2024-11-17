<?php
if (isset($_POST['data'])) {
	$db=mysqli_connect("localhost", "root", "", "etf");
	if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
	$S_Data = $_POST['data'];
	$S_Details = json_decode($S_Data, true);
	$studentID = $S_Details['id'];
	$firstName = $S_Details['firstname'];
	$lastName = $S_Details['lastname'];
	$email = $S_Details['email'];
	$nearCity = $S_Details['nearestcity'];
	$course = $S_Details['course'];
	$guardian = $S_Details['guardian'];
	$subject1 = $S_Details['subject_1'];
	$subject2 = $S_Details['subject_2']; 
	$subject3 = $S_Details['subject_3'];
	$subject4 = $S_Details['subject_4'];
	$subject5 = $S_Details['subject_5'];
	$subject6 = $S_Details['subject_6'];

	mysqli_query($db, "INSERT INTO s_details (SID, FirstName, LastName, Email, NearestCity, Course, Guardian, Subject_1, Subject_2, Subject_3, Subject_4, Subject_5, Subject_6) VALUES ('$studentID', '$firstName', '$lastName', '$email', '$nearCity', '$course', '$guardian', '$subject1', '$subject2', '$subject3', '$subject4', '$subject5', '$subject6')");
	if ($db->query($sql) === TRUE) {
        echo "Data successfully saved!";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

	mysqli_close($db);
}
?>