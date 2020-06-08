<?php
//father class

class Person {
  // proprieties
  public $nome;
  public $cognome;
  public $sesso;

  //construct
  public function __construct($_nome, $_cognome, $_sesso) {
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->sesso = $_sesso;
  }
}
$dipendente = new Person ('Francesco' ,'Scarniglia','Uomo', 'WebDev');
var_dump($dipendente);
