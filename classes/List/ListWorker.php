<?php
// includo Worker
include_once __DIR__ . '/../Worker.php';

// workers list
$workers = [
  ['Francesco', 'Scarniglia', 'Uomo', 'WebDev'],
  ['Francesco', 'Rossi', 'Uomo', 'WebDev'],
  ['Francesco', 'Verdi', 'Uomo', 'WebDev']
];

$worker_list = [];

foreach ($workers as $worker) {
  $worker_list[]= new Worker (...$worker);
  //var_dump($worker_list);
}
