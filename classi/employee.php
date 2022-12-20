<?php


class Employee {
  public $nome;
  public $cognome;
  public $età;


  public function __construct(
    String $nome,
    String $cognome,
    Int $età
    ) {
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->età = $età;
  }


}

?>