<?php
if ($_POST["email"] == $_POST["conf"] and $_POST["senha"] == $_POST["confS"]) {
    
    $pdo = new PDO('mysql:host=localhost;dbname=dadosadrian', 'root', '');

    $sql = $pdo->prepare("INSERT INTO `info` VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $sql->execute(array(
        $_POST['nome'],
        $_POST['endereço'],
        $_POST['rua'],
        $_POST['cidade'],
        $_POST['estado'],
        $_POST['rg'],
        $_POST['cpf'],
        $_POST['sexo'],
        $_POST['email'],
        $_POST['senha'],
    ));

    $_SESSION['ok'] = "<div class='alert alert-primary' role='alert'>Dados Válidos</div>";
   echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";

} else {
    $_SESSION['ok'] = "<div class='alert alert-danger' role='alert'>Dados Inválidos</div>";
    echo "<meta http-equiv= 'refresh' content='0; URL=cadastrar.php'/>";
}
?> 
