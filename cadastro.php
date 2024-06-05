<!-- <?php
   
    if(isset($_POST['submit'])){
        
            $name = $_POST['name'];
            $email = $_POST['email'];
            $date = $_POST['date'];
            $tel = $_POST['tel'];
            $password = $_POST['password'];
           
    }

    // add readMe 
    // create a layout the home page
    // add new img from login 
    // create a database
    // add responsive part 

?> -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="./src/scss/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="container">

        <div class="form_content">

            <span class="title_content">
                <h1 class="title">Cadastrar</h1>
                <i class="material-symbols-outlined icon">potted_plant</i>
            </span>

            <form action="./home.php" class="form">

                <label for="name">Nome:</label>
                <input type="text" name="name" class="input">
                <label for="name">Email:</label>
                <input type="text" name="email" class="input">
                <label for="name">Data de Nascimento:</label>
                <input type="date" name="date" class="input-date" >
                <label for="name">Telefone:</label>
                <input type="text" name="tel" class="input">
                <label for="name">Senha:</label>
                <input type="text" name="password" class="input">
                <label for="name">Confirmar senha:</label>
                <input type="text" name="confirm_password" class="input">

                <input type="submit" name="submit" value="Enviar" class="btn">
            </form>

            <span class="login_option">
                <a href="./login.php">Já sou cadastro(a)</a>
            </span>

        </div>
        <div class="img">

        </div>
    </div>
</body>

</html>