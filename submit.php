<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vyplněné data<h1>
        <?php
        
            $nickname = filter_input(INPUT_POST, "nickname");
            $password =  filter_input (INPUT_POST, "password");
            echo "Bylo vyplněno vaše jméno $nickname <br>";
            echo "Bylo vyplněno helso $password";

            if (($nickname == 'caby123') && ($password == '1234'))
            {echo "Jsi přihlášen";}

            else {echo "nesprávné heslo nebo jméno";}
        ?>
</body>
</html>