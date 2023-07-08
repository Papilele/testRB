<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mail/vendor/autoload.php';

if(isset($_POST["send"])) {
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 1;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'coloteroritata@gmail.com';
            $mail->Password   = 'kvgmktstaxnvzivj';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
            $mail->CharSet = 'UTF-8';

            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $mail->setFrom('coloteroritata@gmail.com');
            $mail->addAddress('rbru-metrika@yandex.ru');

            $mail->isHTML(true);
            $mail->Subject = 'Запись на обследование';
            $mail->Body    = "<b>Клиент:</b> ". $_POST["name"] . "<br><b>Номер телефона: </b> " .$_POST["phone"] . "<br><b>Дата записи: </b>". $_POST["date"];
            $mail->AltBody = "Клиент: ". $_POST["name"] . "; Номер телефона: " .$_POST["phone"] . "; Дата записи: ". $_POST["date"];

            $mail->send();
            echo '<script>
            alert("Данные отправлены!");
            document.location.href = "index.php";
            </script>';
        } catch (Exception $e) {
            echo '
            <script>
            alert("Ошибка!");
            </script>';
        }    
}