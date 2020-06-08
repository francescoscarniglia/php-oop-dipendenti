<?php
// includo Worker
include_once __DIR__ . '/../Worker.php';

// workers list
$workers = [
  ['Francesco', 'Scarniglia', 'Uomo', 'Front End Dev'],
  ['Letizia', 'Rossi', 'Donna', 'Graphic Design'],
  ['Paolo', 'Verdi', 'Uomo', 'Full-stack Dev'],
  ['Sofia', 'Bruni', 'Donna', 'Social Media Manager'],
  ['Luana', 'Leopardi', 'Donna', 'Storytelling'],
  ['Giovanni', 'Marrone', 'Uomo', 'Copywriter']
];

$worker_list = [];

foreach ($workers as $worker) {
  $worker_list[]= new Worker (...$worker);
  //var_dump($worker_list);
}
