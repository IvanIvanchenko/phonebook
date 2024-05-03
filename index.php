<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phonebook</title>
</head>
<body>
<h1>Phonebook</h1>

<!-- Форма для добавления контакта -->
<form action="AddContact.php" method="post">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required>
    <label for="phone">Телефон:</label>
    <input type="text" id="phone" name="phone" required>
    <button type="submit">Добавить</button>
</form>

<!-- Вывод контактов -->
<h2>Список контактов</h2>
<?php include 'ShowContacts.php'; ?>

</body>
</html>
