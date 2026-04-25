<?php
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http')
    . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$headers = get_headers($url);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Headers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <img src="photo/mospolitech.png" class="logo" alt="logo">
    <h1>Заголовки запроса</h1>
</header>

<main>
    <label for="headers">Заголовки ответа:</label>
    <textarea id="headers" rows="20" cols="80">
<?php
echo htmlspecialchars(print_r($headers, true));
?>
    </textarea>
</main>

<footer>
    задание для самостоятельной работы
</footer>

</body>
</html>