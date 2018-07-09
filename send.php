<?php

if(isset($_POST['submit'])){
    $to = "ilucspirit@gmail.com"; // Здесь нужно написать e-mail, куда будут приходить письма
    $from = "no-reply@zodiac-studio.ru"; // Здесь нужно написать e-mail, от кого будут приходить письма, например no-reply@epicblog.net
    $name = $_POST['name'];
    $subject = "Форма отправки сообщений с сайта";
    $subject2 = "Copy of your form submission";
    $message = "ФИО посетителя: ". $name . " | Адрес электронной почты: "  . $_POST['email'] . " | Телефон: "  . $_POST['phone'] . "| Комментарий: " . $_POST['comment'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

    mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
    echo "Сообщение отправлено. Спасибо Вам " . $name . ", мы скоро свяжемся с Вами.";
    echo "<br /><br /><a href='https://zodiac-studio.ru'>Вернуться на сайт.</a>";

}

?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
    function changeurl(){eval(self.location="https://epicblog.net/index.php");}
    window.setTimeout("changeurl();",3000);
</script>