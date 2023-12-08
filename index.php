<?php
include('conexao.php');

if(isset($_POST['email'])|| isset($_POST['senha'])){



if(strlen($_post['email'] ==0)){
    echo "preencha sua senha";

}else if(strlen($_post['senha'])==0){
    echo " preencha sua senha";
}else {
    $email =$mysqli->real_escape_string($_post['email']);
    $senha =$mysqli->real_escape_string($_post['senha']);

    $sql_code = "select * from usuarios where  email = '$email' and senha = ' $senha'";
    $sql_query = $mysqli ->query($sql_code) or die (" falha na execuçao do codigo sql: ".$mysqli ->error);

    $quantidade = $sql_query ->num_rows;

    if($quantidade ==1){
          $usuario =$sql_query -> fetch_assoc();
          if(isset($_SESSION)){
            session_start();
          }
          $_SESSION['user'] =$usuario['id'];
          $_SESSION['name'] = $usuario['nome'];

          header("location :painel.php");

    }else {
        echo " falha ao logar ! e-mail ou senha incoretos";
    }
}

}




?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario do projeto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>apresente-se para nos
          
        </h1>
    </header>
    <section>
      <form action="cad.php" method="get">
           <label for="email">email</label>
           <input type="email" name="email" id="idemail">
           <label for="senha">senha</label>
           <input type="password" name="senha" id="idsenha">
           <input type="submit" value="enviar">
      </form>
        
    </section>
</body>
</html>