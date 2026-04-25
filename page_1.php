<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <img src="photo/mospolitech.png" alt="logo" class="logo">
    <h1>Форма обратной связи</h1>
</header>

<main>
    <form action="https://httpbin.org/post" method="POST">

        <label for="name">Имя пользователя:</label><br>
        <input id="name" type="text" name="name"><br><br>

        <label for="email">Email:</label><br>
        <input id="email" type="email" name="email"><br><br>

        <label for="type">Тип обращения:</label><br>
        <select id="type" name="type">
            <option value="complaint">Жалоба</option>
            <option value="suggestion">Предложение</option>
            <option value="thanks">Благодарность</option>
        </select><br><br>

        <label for="message">Текст обращения:</label><br>
        <textarea id="message" name="message"></textarea><br><br>

        <label>Вариант ответа:</label><br>
        <input id="response-sms" type="checkbox" name="response" value="sms">
        <label for="response-sms">SMS</label>
        <input id="response-email" type="checkbox" name="response" value="email">
        <label for="response-email">Email</label>
        <br><br>

        <button type="submit">Отправить</button>
    </form>

    <br>
    <a href="page_2.php">Перейти на 2 страницу</a>
</main>

<footer>
    задание для самостоятельной работы
</footer>

</body>
</html>