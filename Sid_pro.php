<?php
if (isset($_POST['jsonData'])) {
    $db = new mysqli("localhost", "root", "", "etf");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $jsonData = $_POST['jsonData'];
    $data = json_decode($jsonData, true);
    $old= $data['old'];
    $new= $data['new'];

    $sql = "UPDATE s_details SET SID = '$new' WHERE SID = '$old'";

    if (mysqli_query($db, $sql)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => mysqli_error($db)]);
    }

    $db->close();
}
?>
