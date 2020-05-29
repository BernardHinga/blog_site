<?php
    include_once 'database.inc.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $user = $_POST['u_name'];
    $pass = $_POST['password'];

    $sql="INSERT INTO users (name, email, user_name, password) VALUES ('$name', '$email', '$user', '$pass')";

    mysqli_query($conn, $sql);

    header("Location: ../index.php");

?>