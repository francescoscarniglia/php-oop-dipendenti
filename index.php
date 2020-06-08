<?php
include_once __DIR__ . '/classes/list/ListWorkers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php-oop-dipendenti | Francesco Scarniglia</title>
</head>
<body>
  <div class="app">
    <div class="container">
    <div class="dipendenti">
      <h1>Lista dipendenti</h1>
      <ul>
    <?php
  foreach ($worker_list as $item) { ?>
    <li>
      <h2><small>Nome:</small> <?php echo $item->nome;?> <small>Cognome:</small> <?php echo $item->cognome; ?></h2>
      <h2><small>Mansione:</small> <?php echo $item->work;?> </h2>
      <h2><small>Sesso:</small> <?php echo $item->sesso;?> </h2>
    </li>

  <?php }
     ?>

      </ul>
    </div>  <!--  dipendenti -->
  </div> <!--  container -->
</div> <!--  app -->
</body>
</html>
