<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Přihlašovací folmulář</h1>
    <form action="submit.php" method="post">
            <label for="nickname"> Uživatelské jméno </label>
            <input type="text" name="nickname" id="nickname" placeholder="Uživateké jméno">
            <br>
            <label for="password">heslo:</label>
            <input type="password" name="password" id="password">
            <br>
            <input type="submit" value="Odeslat">
    </form>
</body>
</html>