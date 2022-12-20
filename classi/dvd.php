<?php

include_once __DIR__ . '/prodotto.php';

class DVD extends prodotto{
  public $movie;


  public function __construct(
    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine,


    String $movie
    ) {
    $this->movie = $movie;

    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
  }


}

?>