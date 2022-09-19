<?php
    include_once 'db_config.php';
    $sql = "DELETE FROM todo WHERE id='" . $_GET["id"] . "'";
    if(mysqli_query($conn,$sql)){
        header('location: ./index.php');
        echo "Record Deleted";
    }else{
        echo "Error Deleting the record" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>