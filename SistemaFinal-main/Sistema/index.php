<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VER SE TENHO DIREITO AO BOLSA FAMILIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-black">
    <div class="container text-center mt-2 ">
        <img src="Recursos/logo.gif" alt="200px">


        <div>
            <h2>
                <font color="#ffffff">VER SE TENHO DIREITO AO BOLSA FAMILIA</font>
            </h2>

            <form action="Web/login.php" method="post">
                <label class="form-label text-light" for="usuario">Usuário</label>
                <input class="form-control mb-3" type="email" name="user" id="usuario" required>

                <label class="form-label text-light" for="pass">Senha</label>
                <input class="form-control mb-3" type="password" name="senha" id="pass" required>

                <input class="btn btn-primary btn-lg" type="submit" value="Logar">
                <a class="btn btn-danger btn-lg" href="Web/cadastrar.php">Cadastrar</a>

            </form>
        </div>
    </div>
    <?php

    if (!empty($_SESSION['ok'])) {
        echo $_SESSION['ok'];
        unset($_SESSION['ok']);
    }

    ?>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>



</body>

</html>