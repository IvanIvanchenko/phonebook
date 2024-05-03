<?php

// Загрузка всех контактов из файла JSON
$contacts = [];
if (file_exists('contacts.json')) {
    $json = file_get_contents('contacts.json');
    $contacts = json_decode($json, true);// Преобразование в ассоциативный массив
}

// Вывод контактов на страницу
echo '<ul>';
foreach ($contacts as $contact) {
    echo '<li>' . $contact['name'] .' '. $contact['phone'] . ' <a href="DeleteContact.php?name=' . urlencode($contact['name']) . '">Удалить</a></li>';
}
echo '</ul>';