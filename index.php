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
  $sostituzione = str_replace($badword, "***", $paragrafo);
 ?>

<!-- html con elementi php -->
<p><?php echo $paragrafo ?></p>
<p><?php echo 'Lunghezza stringa: '.strlen($stringa)?></p>
<p><?php echo $sostituzione ?></p>
