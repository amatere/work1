<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];
        echo "Привет, $username!";
    } else {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name'])) {
            $username = htmlspecialchars($_POST['name']);
            setcookie('username', $username, time() + 1);
            echo "Привет, $username!";
        } else {
            echo '<form method="post">
                <label for="name">Введите
                    ваше имя:</label>
                    <input type="text"
                    id="name" name="name" required>
                    <input type="submit"
                    value="Отправить">
        </form>';
        }
    }
    ?>
    
</body>
</html>