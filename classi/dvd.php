<?php

include_once __DIR__ . '/prodotto.php';

class DVD extends prodotto{
  public $durata;


  public function __construct(
    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine,


    String $durata
    ) {
    $this->durata = $durata;

    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
  }


}

?>