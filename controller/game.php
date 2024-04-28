<?php 
class Game{
    private $jogadores[];


public function __construct($jogador){
    
    $this->jogadores = $jogador;
}

public function get_jogadores(){
    return $this->jogadores;
}

}


?>
