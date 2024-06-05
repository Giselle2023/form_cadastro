<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="./src/scss/login.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="form_content">

            <span class="title_content">
                <h1>Login</h1>
                <i class="material-symbols-outlined icon">star</i>
            </span>

            <form action="index.php" method="$_POST" class="form">

                <label for="name">Email:</label>
                <input type="text" name="email">
                <label for="name">Senha:</label>
                <input type="text" name="password">

                <input type="submit" name="submit" value="Enviar" class="btn">

            </form>

            <span class="login_option">
                <a href="">Esqueci a senha</a>
                <a href="./cadastro.php">Cadastrar</a>
            </span>

        </div>
    
    </div>
</body>

</html>