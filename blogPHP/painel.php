<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação da publicação</title>
    <Style>
        .pub{
            width: 300px;
            height: 200px;
        }
    </Style>
</head>
<body>
        <?php
            if(isset($_SESSION['user'])){
                $user = $_SESSION['user'];
            }
        
        ?>
    <form action="validaPost.php" method="POST">
        <h2>Olá <?=$user?>, no que está pensando hoje?</h2>
        <label>Título da Pub: 
            <input type="text" name="titl" placeholder="Titulo da pub"/>
        </label><br/>
        <label>Subtítulo da Pub: 
            <input type="text" name="sbTitl" placeholder="Subtitulo da pub"/>
        </label><br/>
        <label>Publicação:<br/>
            <textarea class="pub" name="pub" placeholder="Publicação"></textarea>
        </label>
        <input type="submit" value="Postar"/>
    </form>
</body>
</html>