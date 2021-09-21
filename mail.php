<?php
$addr = 'turissttt@gmail.com';
$theme = 'Для тебя';
$text = 'Приве малыш! Как дела?';
if (isset($addr) && isset($theme) && isset($text)
        && $addr != "" && $theme != "" && $text != "") {
    if (mail($addr, $theme, $text, "From: turisstt@gmail.com")) {
        header('Refresh: 5; URL=http://localhost/kolibri/');
        echo "<h3>Сообщение отправлено</h3>";
    }
    else {
        header('Refresh: 5; http://localhost/kolibri/');
        echo "<h3>При отправке сообщения возникла ошибка</h3>";
    }
}

exit;
?>



              


