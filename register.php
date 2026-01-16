<?php
include 'connect.php';
session_start();

if (isset($_POST['signUp'])) {

    $firstName = $_POST['fName'];
    $lastName  = $_POST['lName'];
    $email     = $_POST['email'];
    $password  = md5($_POST['password']);

    $check = $conn->query("SELECT * FROM tbl_user WHERE email='$email'");

    if ($check->num_rows > 0) {
        echo "Email already exists!";
    } else {
        $insert = "INSERT INTO tbl_user (firstName, lastName, email, password)
                   VALUES ('$firstName', '$lastName', '$email', '$password')";

        if ($conn->query($insert)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['signIn'])) {

    $email    = $_POST['email'];
    $password = md5($_POST['password']);

    $result = $conn->query("SELECT * FROM tbl_user WHERE email='$email' AND password='$password'");

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        header("Location: homepage.php");
        exit();
    } else {
        echo "Incorrect Email or Password!";
    }
}
?>
