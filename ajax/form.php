<?php
$name=$_POST["name"];
$text=$_POST["text"];
mail("yodamorfius@gmail.com", "Тест письма", "Имя отправителя: " . $name . "." . "Сообщение: " . $text);