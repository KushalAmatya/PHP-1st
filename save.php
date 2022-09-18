<?php
include('./db_config.php');
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $data = $_POST['todo'];
    $save = "insert into todo(`title`) values ('$data')";
    $savedata = $conn->query($save);
    header('location: ./index.php');
}
