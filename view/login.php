<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Metatags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="IBudget" content="Site para você controlar seus gastos pessoais." />

    <!-- FaviIcon -->
    <link rel="icon" href="../images/ibudget_icon.png" />

    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="../css/login&register.css">

    <title>IBudget | Login</title>
</head>

<body>

    <div class="box">
        <img src="../images/ibudget_logo.png">

        <h1>Faça seu login</h1>

        <form action="../sendLogin.php" method="post">
            <label for="user">Usuário</label>
            <input type="text" name="user" id="user" placeholder="username" required />

            <?php
            session_start();
            if (@$_SESSION['usuarioIncorreto'] == 1) {
                echo "<div class='messageError'> <p> Usuário informado é inválido! </p> </div>";
            }
            ?>

            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="1234" required />

            <?php
            if (@$_SESSION['senhaIncorreta'] == 1) {
                echo "<div class='messageError'> <p> A senha informada está incorreta! </p> </div>";
            }
            ?>

            <button type="submit" class="btn-grad">Entrar</button>

            <div class="span">
                <p>Você não está cadastrado?</p><a href="../headerRegister.php">Clique aqui</a>
            </div>
        </form>
    </div>

</body>

</html>