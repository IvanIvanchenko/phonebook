<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Чтение имени и номера из запроса
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // Загрузка всех контактов из файла JSON
    $contacts = [];
    if (file_exists('contacts.json')) {
        $json = file_get_contents('contacts.json');
        $contacts = json_decode($json, true);// Преобразование в ассоциативный массив
    }

    // Добавление нового контакта в массив
    $contacts[] = ['name' => $name, 'phone' => $phone];

    // Сохранение обновленного списка контактов в файл JSON
    $json = json_encode($contacts, JSON_PRETTY_PRINT);
    file_put_contents('contacts.json', $json);

    header('Location: index.php');
    exit;
}