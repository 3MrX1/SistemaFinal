<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="bg-black">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="..\Recursos/logo.gif" alt="" width="150px"></a>
        </div>
    </nav>

    <div class="container mt-4 text-center">
        <h2>Cadastro</h2>
        
        <form action="bd.php" method="post">
            
            <p>Preencha as informações para concluir o cadastro.</p>


            <div class="row py-2">
                <div class="col-md-12 ">
                    <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome completo">
                </div>
            </div>

            <!-- Endereço Cidade -->
            <div class="row py-2">
                <div class="col-md-3 ">
                    <input class="form-control" type="number" name="endereço" id="endereço" placeholder="endereço">
                </div>
                <div class="col-md-3">
                    <input class="form-control" type="text" name="rua" id="rua" placeholder="rua">
                </div>
                <div class="col-md-3 ">
                    <input class="form-control" type="text" name="cidade" id="cidade" placeholder="cidade">
                </div>
                <div class="col-md-3 ">
                    <input class="form-control" type="text" name="estado" id="estado" placeholder="estado">
                </div>
            </div>

            <!-- Rg e Cpf -->
            <div class="row py-2">
                
                <div class="col-md-3 ">
                    <input class="form-control" type="text" name="rg" id="rg" placeholder="rg">
                </div>
                <div class="col-md-9 ">
                    <input class="form-control" type="text" name="cpf" id="cpf" placeholder="cpf">
                </div>
            </div>

            <!--sexo -->  
            <div class="row py-2">
                <div class="col-md-12">
                    <select class="form-control" name="sexo" id="sexo" required>
                        <option value="">Selecione o sexo</option>
                        <option value="Fem">Feminino</option>
                        <option value="Masc">Masculino</option>
                        <option value="Indeterminado">Prefiro não dizer</option>
                    </select>
                    
                </div>
            </div>

            <!--Email + conferir -->
            <div class="row py-2">
                <div class="col-md-6">
                    <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu email">
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="email" name="conf" id="conf" placeholder="Digite seu email novamente">
                </div>
            </div>

            <!--Senha-->
            <div class="row py-2">
                <div class="col-md-6">
                    <input class="form-control" type="password" name="senha" id="senha" placeholder="Digite sua senha">
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="password" name="confS" id="confS" placeholder="Digite sua senha novamente">
                </div>
            </div>

            <!-- Botão de submit -->
            <div>
                <input class="btn btn-dark" type="submit" value="Cadastrar"></br>
            </div>
            
    </div>
    </div>

    <footer class="footer text-center fixed-bottom bg-dark py-3">
        <div class="container">
            <p class="text-light">Todos os direitos reservados. 2023</p>
        </div>
        </form>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>