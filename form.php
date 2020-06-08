<?php
    $mysqli = new mysqli("localhost", "root", "", "concrete");
    $mysqli->query("SET NAMES 'utf-8'");

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $infa = $_POST['infa'];

    $to      = 'pavelcorolenko535@gmail.com';
    $subject = 'Concrete delivery';
    $message = $name.' хочет купить бетон. Вот его почта: '.$email.'\n Номер телефона'.$phone.' И дополнительная информация от '.$name.': '.$infa.'';
    $headers = 'From: concrete-delivery@gmail.com' . "\r\n" .
        'Reply-To: concrete-delivery@gmail.com' . "\r\n";

    mail($to, $subject, $message, $headers);
?>