<?php
if (isset($_POST['jsonData'])) {
    $db = new mysqli("localhost", "root", "", "etf");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $jsonData = $_POST['jsonData'];
    $data = json_decode($jsonData, true);
    $FirstName = $data['FirstName'];
    $newFirstName = $data['newFirstName'];

    $sql = "UPDATE s_details SET FirstName = '$newFirstName' WHERE FirstName = '$FirstName'";

    if (mysqli_query($db, $sql)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => mysqli_error($db)]);
    }

    $db->close();
}
?>
