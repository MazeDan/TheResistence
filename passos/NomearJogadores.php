<?php include_once('../controller/jogador.php'); ?>
<?php include_once('../controller/regras.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_POST['jogadores'])) $jogadores = $_POST['jogadores'] ?>
<form action="NomearJogadores.php" method="POST">
    <?php 
    if(isset($_POST['jogadores'])){
       for($i=0; $i < $jogadores;$i++){
        ?>
        <label for="Jogador n<?php echo $i?>">Jogador n<?php echo $i?></label>
        <input type="text" name="jogador<?php echo $i?>"><br>
        <?php   
    }
    ?>
        <input type="hidden" name="jogadoresgetnumero" value= "<?php echo $jogadores ?>">
        <input type="submit" value="Enviar">
    </form>
<?php
  }
    if($_POST && isset($_POST['jogador0'])){
        $numero_de_jogadores = $_POST['jogadoresgetnumero'];
        $resistencia = 0;
        $espioes = 0;
        $funcao = '';
       




        $jogadores = array();
        for($i=0; $i < $numero_de_jogadores;$i++){
            $numero_de_escolha = rand(0,1);

        if ($numero_de_escolha == 0 && $resistencia > 0) {
            echo "Antes quantidade de Resistencia = " . $resistencia . "<br>";
            $resistencia--;
            $funcao = "resistencia";
            echo "Depois quantidade de Resistencia = " . $resistencia . "<br><br>";
        }

        else if($numero_de_escolha == 0 && $resistencia == 0){
                $funcao = "espião";
        }
        else if($numero_de_escolha == 1 && $espioes == 0){
                $funcao = "resistencia";
        }

        else if($numero_de_escolha == 1 && $espioes > 0) {
            echo "Antes quantidade de espiao = " .$espioes . "<br>";
            $espioes--;
            $funcao = "espião";
            echo "Depois quantidade de espiao = " .$espioes . "<br><br>";
        }  else {
            echo "Nenhuma condição atendida para o jogador " . $i . "<br><br>";
        }
            
            $nome = "jogador" . $i;
            $jogador = new Jogador($i,$_POST[$nome],$funcao);

            $jogadores[] = $jogador;
        }

        $escolhaLider = rand(0, $numero_de_jogadores - 1);
        $jogadores[$escolhaLider]->setLider();
        


        foreach ($jogadores as $jogador) {
            if(!$jogador->lider){
                $jogador->exibir();
            }

        }

        while($missao > 6){

        }
    }
?>
    </body>
</html>