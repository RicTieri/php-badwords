<?php
$testo = 'C\'era una volta una dolce bimbetta; solo a vederla le volevan tutti bene, e specialmente la nonna che non sapeva più che cosa regalarle. Una volta le regalò un cappuccetto di velluto rosso, e poiché‚ le donava tanto, ed ella non voleva portare altro, la chiamarono sempre Cappuccetto Rosso. Un giorno sua madre le disse: "Vieni, Cappuccetto Rosso, eccoti un pezzo di focaccia e una bottiglia di vino, portali alla nonna; è debole e malata e si ristorerà. Sii gentile, salutala per me, e va\' da brava senza uscire di strada, se no cadi, rompi la bottiglia e la nonna resta a mani vuote."'
?>


<h1>Cappuccetto Rosso</h1>
<h3>Introduzione</h3>
<p>
  <?php
  echo "$testo";
  ?>
</p>
<p>
  <?php
  echo "la lunghezza è " . strlen($testo) . " battiture";
  ?>
</p>

<form action="./index.php" method="get">
  <label for="parola_da_censurare">Inserisci la parola da censurare:</label>
  <input type="text" name="parola_da_censurare" id="parola_da_censurare" placeholder="Scegli una parola">
  <button type="submit">Censura</button>
</form>

<?php
if (isset($_GET['parola_da_censurare'])) {
    $inputUtente = $_GET['parola_da_censurare'];
    $parolaDaCensurare = '/'.$inputUtente.'/i';
    $testoCensurato = preg_replace($parolaDaCensurare, '***', $testo);
    echo "<h3>Versione censurata</h3>";
    echo "$testoCensurato";
}
?>
