<?php
include "db_conn.php";


    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    // $gender = $_POST['gender'];

    $sql = "INSERT INTO crud SET
    first_name='$first_name',
    last_name='$last_name',
    email='$email',
    birthday='$birthday'";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: new.php?msg=New record created succesfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }

 
?>
