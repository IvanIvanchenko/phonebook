<?php

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['name'])) {
    //Чтение имени из запроса
    $name = $_GET['name'];

    // Загрузка всех контактов из файла JSON
    $contacts = [];
    if (file_exists('contacts.json')) {
        $json = file_get_contents('contacts.json');
        $contacts = json_decode($json, true); // Преобразование в ассоциативный массив
    }

    // Удаление контакта
    foreach ($contacts as $key => $contact) {
        if ($contact['name'] === $name) {
            unset($contacts[$key]);
            break;
        }
    }

    // Сохранение обновленного списка контактов в файл JSON
    $json = json_encode($contacts, JSON_PRETTY_PRINT);
    file_put_contents('contacts.json', $json);

    header('Location: index.php');
    exit;
}
