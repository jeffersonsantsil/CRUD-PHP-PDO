<?php


if ($_POST) {
    if ($_POST['function'] == "cadUser") {
        cadUser($_POST);
    }
    if ($_POST['function'] == "deleteUser") {
        deleteUser($_POST);
    }
} else {
    echo "Formulario vazio";
}

function connBanco()
{
    try {
        $bancoDeDados = "mysql";
        $hostName = "localhost";
        $dbName = "testesphp";
        $userName = "root";
        $password = "";

        $conn = new PDO("{$bancoDeDados}:dbname={$dbName}; host={$hostName}", $userName, $password);
    } catch (PDOException $e) {
        echo "Erro com banco de Dados: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Erro generico: " . $e->getMessage();
    }

    return $conn;
}


//----------------------- CADASTRAR USUÁRIO---------------------------//
function cadUser($values)
{
    if (!$values == null) {
        $conn = connBanco();
        $dados = $conn->prepare("INSERT INTO users(name, email, userName, password) VALUES (:name, :email, :userName, :password)");
        $dados->bindValue(":name", $values["name"]);
        $dados->bindValue(":email", $values["email"]);
        $dados->bindValue(":userName", $values["userName"]);
        $dados->bindValue(":password", passwordCryp($values['password']));
        $dados->execute();
        echo "Cadastrado com Sucesso!";
    }
}



//----------------------- CRIPTOGRAFAR SENHA ---------------------------//
function passwordCryp($value)
{
    $passwordCryp = hash('sha256', $value);
    return $passwordCryp;
}

//----------------------- DELETAR USUÁRIO ---------------------------//

// function deleteUser($values){

// }