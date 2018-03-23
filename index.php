<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Inicial</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/damat.css"  media="screen,projection"/>
</head>
<body>
    <?php require_once 'inc/navbar.php'?>
    <div class="row">
    
    <div class="container">
        <form class="col s6 offset-s3 damat-form">
            <div class="row">
                <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <input id="numero_siape" type="text" class="validate">
                <label for="numero_siape">Número do Siape</label>
                </div>
                <div class="input-field">
                <i class="material-icons prefix">vpn_key</i>
                <input id="senha" type="password" class="validate">
                <label for="senha">Senha</label>
                </div>
                <div class="row">
                <a class="waves-effect waves-light btn col s6 offset-s3"><i class="material-icons right">send</i>Fazer Login</a>
                </div>
            </div>           
        </form>
    </div>
  </div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</html>