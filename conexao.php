<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "bdlogin";

$bdcon = new mysqli("$host", "$usuario", "$senha", "$banco");
 
if($bdcon->connect_error) {
    echo "conexao_erro";
}else{
    echo "conexao_ok";
}

?>
