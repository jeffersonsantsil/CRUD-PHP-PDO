<?php

require_once "conn.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="src/style.css">
</head>

<body>
    <H1>CRUD - em PHP usando PDO</H1>

    <div class="erros" hidden>

    </div>

    <div class="geral">

        <div class="form-control" id="dados">
            <form action="conn.php" id="formCad" method="post">
                <div class="function-PHP">
                    <input hidden type="text" name="function" id="cadUser" value="cadUser">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label col-auto">Nome</label>
                    <input type="text" name="name" class="form-control col-auto" id="name" placeholder="Nome Completo">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label col-auto">Email</label>
                    <input type="email" name="email" class="form-control col-auto" id="email" placeholder="name@example.com.br">
                </div>
                <div class="mb-3">
                    <label for="userName" class="form-label col-auto">Usuário</label>
                    <input type="text" name="userName" class="form-control col-auto" id="userName" placeholder="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label col-auto">Senha</label>
                    <input type="password" name="password" class="form-control col-auto" id="password" placeholder="Senha">
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                            No minimo 8 caracteres.
                        </span>
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-success mb-3">Cadastrar</button>
                </div>
            </form>
        </div>

        <div id="table">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Usuário</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Jefferson</td>
                        <td>Psauro</td>
                        <td>
                            <a href="#">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            |
                            <a href="#">
                                <i class="bi bi-person-x-fill"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>