<?php

// iniciando a seção
session_start();

// variáveis login e senham recebem os dados digitados na página anterior
$login = $_POST['numero_siape'];
$senha =$_POST['senha'];

// conexão com o banco de dados
$con = mysqli_connect("127.0.0.1", "root", "jxtnlx33", "server");

// a variável $result pega o valor de login e senha e faz uma busca na tabela de usuarios
$result = mysqli_query($con, "SELECT * FROM `usuario` WHERE `NOME` = '$login' AND `SENHA`='$senha'");

// bloco com if e else, verificando se $result foi bem sucessida
// se retorna 1 a busca foi bem sucedida, se retornar 0 houve algum erro na busca
if(mysqli_num_rows($result) > 0) {
    $_SESSION['numero_siape'] = $login;
    $_SESSION['senha'] = $senha;
    header('location:paginas/horarios.php');
} 
else if($login == "admin" && $senha == "admin") {
    header('location:paginas/admin.php');
}
else {
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('localtion:index.php');
}

