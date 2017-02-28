
<h1>Opdracht 1</h1>
<p>

    <em>
        Als je vragen hebt dan kun je die altijd via de mail stellen.<br>
        Mijn email is: jasper@cmm.nl
    </em>
</p>

<p>
    <h2>Maak op basis van de onderstaande html een php code let op de volgende punten</h2>
    <ul>
        <li>Maak gebruik van 1 loop</li>
        <li>Voorkom dubbele code</li>
        <li>Gebruik minimaal 3 verschillende variabelen</li>
    </ul>
</p>

<hr>

<ul>
    <li>Auto nummer 1 heeft 4 zitplaatsen</li>
    <li>Fiets nummer 1 heeft 2 zitplaatsen</li>
    <li>Step nummer 1 heeft 1 staplaats</li>
    <li>In totaal kunnen er 7 mensen mee</li>
</ul>
<ul>
    <li>Auto nummer 2 heeft 4 zitplaatsen</li>
    <li>Fiets nummer 2 heeft 2 zitplaatsen</li>
    <li>Step nummer 2 heeft 1 staplaats</li>
    <li>In totaal kunnen er 14 mensen mee</li>
</ul>
<ul>
    <li>Auto nummer 3 heeft 4 zitplaatsen</li>
    <li>Fiets nummer 3 heeft 2 zitplaatsen</li>
    <li>Step nummer 3 heeft 1 staplaats</li>
    <li>In totaal kunnen er 21 mensen mee</li>
</ul>
<ul>
    <li>Auto nummer 4 heeft 4 zitplaatsen</li>
    <li>Fiets nummer 4 heeft 2 zitplaatsen</li>
    <li>Step nummer 4 heeft 1 staplaats</li>
    <li>In totaal kunnen er 28 mensen mee</li>
</ul>
<ul>
    <li>Auto nummer 5 heeft 4 zitplaatsen</li>
    <li>Fiets nummer 5 heeft 2 zitplaatsen</li>
    <li>Step nummer 5 heeft 1 staplaats</li>
    <li>In totaal kunnen er 35 mensen mee</li>
</ul>

<hr>
<h2>Uitwerking</h2>
<?php
$totaal = 0;
$herhalingen = 5;
$verkeersmiddelen = array(
  'Auto ' => 4,
  'Fiets ' => 2,
  'Step ' => 1
);

for ($i=1; $i<=$herhalingen; $i++) {

  echo "<ul> \n";

  foreach ($verkeersmiddelen as $ding => $aantal) {
    $plekken = " zitplaatsen.";
    if($ding == 'Step ') {
      $plekken = " staplaats.";
    }
    $totaal += $aantal;
    echo "<li>";
    echo $ding." nummer ".$i." heeft ";
    echo $aantal.$plekken.'</li>'."\n";
  }

  echo '<li>Totaal kunnen er dan '.$totaal." mensen mee.</li>\n";
  echo "</ul>
  \n";

}
