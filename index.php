<?php include_once('controller/game.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 

    <?php 
    


    if($_POST){
        $jogadores = $_POST["jogadores"];
        
        $gameInit = new Game($jogadores);
        echo $gameInit->get_jogadores();
    }else{
        ?>
    <form action="index.php" method="POST">
        <label for="Numero de Jogadores"></label>
        <input type="number" name="jogadores">
        <input type="submit" value="Enviar">
    </form>
        <?php
    }
    ?>
</body>
</html>