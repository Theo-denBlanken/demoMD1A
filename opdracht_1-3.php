<?php

// laat alle errors zien:
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);


/*
tafel van 2
begin bij 1
einde bij 10

de html output is dan bijvoorbeeld:
1 x 2 = 2
2 x 2 = 4
3 x 2 = 6
4 x 2 = 8


Als je tijd over hebt:
elke oneven regel een ander kleurtje



Geef nu de tafel van 3.5
Begin bij 99
Eindig bij 118
( Er moeten 3 variabelen aangepast worden
om dit te doen, niet in je for-loop )

Sla de weergave over als het 102 x 3.5  of 108 x 3.5 is.
Bij 112 x 3.5 mag je stoppen met de weergave
*/
$factor = 3.5;
$begin = 99;
$eind = 118;


// genereer tafel met for-lus
echo '<table cellspacing="0">';

for( $i=$begin; $i<=$eind; $i++) {
  $kleur = '#999';
  if ($i % 2 == 0) {
    $kleur = '#ccc';
  }
  if ($i != 102 && $i != 112) {
    echo "<tr style=\"background-color:$kleur\">\n";
    echo "<td style=\"width:2em; text-align:right;\">$i</td>\n";
    echo "<td> &Cross; </td>";
    echo "<td>$factor </td> \n";
    echo '<td>=</td> <td style="padding: 0.1em .5em 0.1em 0.2em; text-align:right;"> '.$i*$factor."</td>\n";
    echo "</tr>\n";
  }

}
echo "</table>
";
