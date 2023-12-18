<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $nasc = $_POST["nasc"];
    $endereco = $_POST["endereco"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];
    $cep = $_POST["cep"];
    $comple = $_POST["comple"];
    
    echo "Nome: $nome <br> Email: $email <br> Telefone: $telefone <br> Data de Nascimento: $nasc <br> Endereço: $endereco <br> Estado: $estado <br> Cidade: $cidade <br> CEP: $cep <br> Complemento: $comple";
    
    $conn = new MySQli ('localhost', 'root', '', 'bd_pindorama');
    
    if($conn -> connect_error){
        die("Connection failed:".$conn->connect_error);
    }
    else{
        $sql = "INSERT INTO cliente (nome, email, telefone, nasc, endereco, estado, cidade, cep, comple) VALUE ('$nome', '$email', '$telefone', '$nasc', '$endereco', '$cidade', '$cep', '$comple')";
        if(mysqli_query($conn, $sql)){
            if(mysqli_affected_rows($conn)){
                header('Location:./cliente.php');
            }else{
                header('Location:./cliente.php'); 
            }
        }else{
            echo"Falha no comando SQL.";
        }
    }
    
?>
