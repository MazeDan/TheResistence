<?php
class Jogador {
    public $numero;
    public $nome;
    public $funcao;
    public $lider = false;  

    public function __construct($numero,$nome,$funcao) {
        

        $this->nome = $nome;
        $this->funcao = $funcao;
        $this->numero = $numero;


    }

    public function exibir() {
        echo "Jogador 0". $this->numero  .": " . $this->nome ."<br>";
        echo "Funcao: " . $this->funcao ."<br>";
        echo "Lider: " . $this->lider ."<br>";

    }

    public function setLider() {
        $this->lider = true;
    }


}

?>