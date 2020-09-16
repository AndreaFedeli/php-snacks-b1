
<?php


$partite =
[
  [
    'squadra_casa' => 'Real Madrid',
    'squadra_ospite' => 'Stella Rossa',
    'punteggio_casa' => 78,
    'punteggio_ospite' => 84
  ],
  [
    'squadra_casa' => 'Partizan',
    'squadra_ospite' => 'Olympiakos',
    'punteggio_casa' => 81,
    'punteggio_ospite' => 85
  ],
  [
    'squadra_casa' => 'Panathinaikos',
    'squadra_ospite' => 'Fenerbhace',
    'punteggio_casa' => 88,
    'punteggio_ospite' => 87
  ]
];
?>

<ul>
<?php for ($i=0; $i < count($partite); $i++) { ?>

  <?php
  $singola_partita = $partite[$i];
  $squadra_casa = $singola_partita['squadra_casa'];
  $squadra_ospite = $singola_partita['squadra_ospite'];
  $punteggio_casa = $singola_partita['punteggio_casa'];
  $punteggio_ospite = $singola_partita['punteggio_ospite'];
  ?>

  <li>
    <?php
      echo $squadra_casa . ' - ' . $squadra_ospite . ' | ' . $punteggio_casa . ' - ' . $punteggio_ospite;
    ?>
  </li>

<?php } ?>
</ul>
