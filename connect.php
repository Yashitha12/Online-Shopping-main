<?php
    $fullame = $_POST['fullname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $username = $_POST['username'];
    $pw = $_POST['pw'];
    $idtype = $_POST['idtype'];
    $idnumber = $_POST['idnumber'];
    $address = $_POST['address'];

    //database connection

    $conn = mysqli_connect("localhost", "root", "", "casa");
    if (!$conn->connect_error) {
        die('Connection failed: ' .conn->connect_error());
    }
    else{
        $stmt=$conn->prepare("insert into registeration($fullname, $dob, $email, $number, $username, $pw, $idtype, $idnumber ,$address )"); 
        $stmt->bind_param("sssisssis", $fullname, $dob, $email, $number, $username, $pw, $idtype, $idnumber, $address);
        $stmt->execute();
        echo "Register Success.....";
        $stmt->close();
        $conn->close();
    }
?>