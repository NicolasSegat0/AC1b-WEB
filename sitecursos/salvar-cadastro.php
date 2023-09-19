<?php 
switch($_REQUEST["acao"]) {
    case 'cadastrar': 
        $nome = $_POST["nome"]; 
        $sobrenome = $_POST["sobrenome"]; 
        $ra = $_POST["ra"]; 
        $email = $_POST["email"];
        $curso = $_POST["curso"];

        $sql = "INSERT INTO usuarios (nome, sobrenome, ra, email, curso) VALUES ('{$nome}', '{$sobrenome}', '{$ra}', '{$email}', '{$curso}')";

        $res = $conn->query($sql); 


}

?>