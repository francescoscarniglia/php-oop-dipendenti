<?php
include_once __DIR__ . '/Person.php';

// child class
class Worker extends Person {
  public $work;

  // costruttore
  public function __construct($_nome, $_cognome, $_sesso, $_work){
    parent::__construct($_nome, $_cognome, $_sesso);
    $this->work = $_work;
  }
}

// $dipendente = new Worker ('Francesco' ,'Scarniglia','Uomo', 'WebDev');
// var_dump($dipendente);
