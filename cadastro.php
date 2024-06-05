<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $tel = $_POST['tel'];
        $password = $_POST['password'];
        echo $name . $email . $date;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="container">

        <div class="form_content">

            <h1>Cadastrar</h1>

            <form action="index.php" method="$_POST" class="form">

                <label for="name">Nome:</label>
                <input type="text" name="name">
                <label for="name">Email:</label>
                <input type="text" name="email">
                <label for="name">Data de Nascimento:</label>
                <input type="text" name="date">
                <label for="name">Telefone:</label>
                <input type="text" name="tel">
                <label for="name">Senha:</label>
                <input type="text" name="password">
                <label for="name">Confirmar senha:</label>
                <input type="text" name="confirm_password">
                
                <input type="submit" name="submit" value="Enviar" id="btn">
            </form>
        </div>
        <div class="img">

        </div>
    </div>
</body>

</html>