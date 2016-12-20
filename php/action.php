<?php
// если была нажата кнопка "Отправить"
if($_POST['sub']) {
		$name = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000);
        $subject = substr(htmlspecialchars(trim($_POST['subject'])), 0, 1000);
        $message =  substr(htmlspecialchars(trim($_POST['message'])), 0, 1000000);
        // $to - кому отправляем
        $to = 'igor-melnyk@i.ua';
        // $from - от кого
        $from=substr(htmlspecialchars(trim($_POST['mail'])), 0, 1000);;
        // функция, которая отправляет наше письмо
        mail($to, $name, $subject, $message, 'From:'.$from);
        echo 'Спасибо! Ваше письмо отправлено.';
}
?>