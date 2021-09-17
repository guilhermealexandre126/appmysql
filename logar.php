<?php
include_once 'conexao.php';

$email = $_GET['email'];
$senha = $_GET['senha'];

$sql = $bdcon->query("SELECT * FROM tblogin WHERE email='$email' AND senha = '$senha'");

if(mysqli_num_rows($sql)>0){
    echo "login_ok";

    while($dados = $sql->fetch_array()){
        echo $dados['id'];
        echo ",";
        echo $dados['nome'];
    }
}else{
    echo "login_erro";
}


?>
