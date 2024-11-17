<?php
$db = new mysqli("localhost", "root", "", "etf");
if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}

$sql = "SELECT SID, FirstName, LastName, Email, NearestCity, Course, Guardian, Subject_1, Subject_2, Subject_3, Subject_4, Subject_5, Subject_6 FROM s_details";
$result = $db->query($sql);
$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
$db->close();

header('Content-Type: application/json');
echo json_encode($data);
?>
