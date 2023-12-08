<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
   
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <h1>resultado do processamento</h1>
    </header>
    <main>
        <?php
          //var_dump($_GET);//$_get $_post $_cookies
           $n = $_GET["email"] ?? "sem email";
           $s =$_GET["senha"] ??"desconhecido";
           echo "<p>é um prazer te conhecer , $n $s! este é o meu site";

          

        ?>
        <p><a href="javascript:history.go(-1)">voltar para pagina anterior</a></p>
<p><a href="index.html">pagina do site</a></p>
        
    </main>
</body>
</html>