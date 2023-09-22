<?php session_start()?>
<html>
    <head>
    <style>
            .bloco{
                border: 2px solid greenyellow;
                display: flex;
                flex-direction: column;
                justify-content: center;
                background-color: #fcfcfc;
                padding: 15px;
                width: 600px;
                height: 400px;
                margin: 15px;
            }

            .lateral{
                display: flex;
                flex-direction: column;
                justify-content: center;
                background-color: #fff;
                align-items: center;
            }
            
            .title{
                font-size: 24px;
                font-weight: 600;
                color: #010080;
            }

            .subTitle{
                font-size: 20px;
                font-weight: 400;
                color: #010080;
            }

            .pub{
                width: 600px;
                display: block;
                text-align: justify;
            }

            .add{
                display: flex;
                flex-direction: row;
                justify-content: center;
                font-size: 20px;
                font-weight: 200;
                color: #000;
                border: 2px solid gray;
                text-decoration: none;
                width: 150px;
                padding: 2px;
                margin: 2px;
                border-radius: 8px;
            }

            .add:hover{
                background-color: #fafafa;
            }


</style>
    </head>
    <body>
        <div class="lateral">
        <?php
            if(isset($_SESSION['titls']) && isset($_SESSION['sbTitls']) && isset($_SESSION['pubs'])){
                $titls = $_SESSION['titls'];
                $sbTitls = $_SESSION['sbTitls'];
                $pubs = $_SESSION['pubs'];

                for($i = 0; $i < count($pubs); $i++){

            ?>

            <div class="bloco">
                <p class="title"><?=$titls[$i]?></p>
                <p class="subTitle"><?=$sbTitls[$i]?></p>
                <div class="pub">
                    <p><?=$pubs[$i]?></p>
                </div>
                <a class="add" href="painel.php">Nova pub</a>
                <a class="add" href="sair.php">Sair</a>
            </div>


            <?php

                }
            }
              
        
        ?>
    </div>
    </body>
</html>