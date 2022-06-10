<?php
    $pizza = $_POST['pizza'];
    $quantity = $_POST['quantity'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $mop = $_POST['mop'];
    $remarks = $_POST['remarks'];

    $conn = new mysqli('localhost','root','','db_pizzaringa');
    if($conn->connect_error){
        die('Connection Failed  :'. $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into tb_orders(pizza, quantity, address, contact, mop, remarks) values (?, ?, ?, ?, ?, ?)");
        $stmt -> bind_param("sisiss", $pizza, $quantity, $address, $contact, $mop, $remarks);
        $stmt -> execute();
        $stmt -> close();
        $conn -> close();
    }
    if(isset($_SERVER['HTTP_REFERER'])) {
        header("location:javascript://history.go(-1)");
    }
?>
