<?php
  // variabile paragrafo con lorem ipsum
  $paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
  pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
  culpa qui officia deserunt mollit anim id est laborum.';
  // variabile badWord
  $badWord = $_GET['badWord'];
  // variabile con valore *** da usare al posto della badWord selezionata
  $sostituzione = str_replace($badWord, "***", $paragrafo);
 ?>

<!-- html con elementi php -->
<h1>paragrafo originale:</h1>
<p><?php echo $paragrafo ?></p>
<p><?php echo 'Lunghezza stringa: '.strlen($paragrafo)?></p>
<h1>paragrafo con sostituzione</h1>
<p><?php echo $sostituzione ?></p>
<p><?php echo 'Lunghezza stringa: '.strlen($sostituzione)?></p>
