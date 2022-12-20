<?php

include_once __DIR__ . '/prodotto.php';

class CD extends prodotto{
  public $formato;


  public function __construct(
    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine,


    String $formato
    ) {
    $this->formato = $formato;

    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
  }


}

?>