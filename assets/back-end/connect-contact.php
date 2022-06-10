<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    $conn = new mysqli('localhost','root','','db_pizzaringa');
    if($conn->connect_error){
        die('Connection Failed  :'. $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into tb_contact(fname, lname, address, contact, message) values (?, ?, ?, ?, ?)");
        $stmt -> bind_param("sssis", $fname, $lname, $address, $contact, $message);
        $stmt -> execute();
        $stmt -> close();
        $conn -> close();
    }
    if(isset($_SERVER['HTTP_REFERER'])) {
        header("location:javascript://history.go(-1)");
    }
?>
