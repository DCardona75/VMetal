<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

 
    // recipient email address
    $to = "cardonapro5@gmail.com";

    
    // Do something with the data, such as sending an email
    mail($to, "Message from $first_name $last_name", $message, $email, $phone);

    echo 'Form submitted successfully!';
}

?>