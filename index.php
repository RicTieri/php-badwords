<?php 
  $text = 'C\'era una volta una dolce bimbetta; solo a vederla le volevan tutti bene, e specialmente la nonna che non sapeva più che cosa regalarle. Una volta le regalò un cappuccetto di velluto rosso, e poiché‚ le donava tanto, ed ella non voleva portare altro, la chiamarono sempre Cappuccetto Rosso. Un giorno sua madre le disse: "Vieni, Cappuccetto Rosso, eccoti un pezzo di focaccia e una bottiglia di vino, portali alla nonna; è debole e malata e si ristorerà. Sii gentile, salutala per me, e va\' da brava senza uscire di strada, se no cadi, rompi la bottiglia e la nonna resta a mani vuote."'
?>


<h1>Cappuccetto Rosso</h1>
<h3>Introduzione</h3>
<p>
  <?php 
    echo "$text";
    ?>
</p>
<p>
  <?php
    echo "la lunghezza è " . strlen($text) . " battiture";
  ?>
</p>
form