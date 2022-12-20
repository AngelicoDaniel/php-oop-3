<?php

include_once __DIR__ . '/prodotto.php';

class Employee extends prodotto{
  public $nome;
  public $cognome;
  public $età;


  public function __construct(
    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine,


    String $song
    ) {
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->età = $età;

    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
  }


}

?>