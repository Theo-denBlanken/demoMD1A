<?php
// laat alle errors zien:
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);












$mijnArray = array(
					array( 'naam' => 'peer', 'aantal' => 33, 'pitjes' => true),
					array( 'naam' => 'appel', 'aantal' => 25, 'pitjes' => false ),
					array( 'naam' => 'kiwi', 'aantal' => 3 )
					);


# loop door de array en laat alles zien
foreach( $mijnArray as $item ) {
 	echo "naam: {$item['naam']}<br>";
 	echo 'aantal: ' . $item['aantal'] . "<br>\n";

 	if ( isset( $item['pitjes'] ) && $item['pitjes'] ) {
	 	echo 'wel pitjes: ' . $item['pitjes'] . "<br>\n";
 	}
 	echo '<hr>';
}







die();
asort( $mijnArray );

# loop door de array en laat alles zien
foreach( $mijnArray as $naam => $item ) {
 	echo $naam . " zijn er: $item \n";
}

// die();




# aanmaken array
$mijnArray = array(
					'peer' => 33,
 					'appel' => 25,
 					'kiwi' => 3
 				  );

$mijnArray['aardbei'] = 88;
// $mijnArray['kiwi'] = array(
// 							'aantal' => 99,
// 							'pitjes' => false
// 							);

arsort( $mijnArray );

print_r( $mijnArray );
die();

# loop door de array en laat alles zien

foreach( $mijnArray as $naam => $item ) {
	# doe iets hier
	print_r( $item );
 	echo $naam . "\n";
}








die();
// een array defineren
$mijnArray = array(
				33,
				array( 'fiets', 'step' ),
				'appel',
				'peer',
				'kiwi'
			);
// $mijnArray = [ 'appel', 'peer', 'kiwi' ];

var_dump( $mijnArray );











die();





$mijnVar = 123;
// zorgen dat een variabele niet meer bestaat
unset( $mijnVar );

var_dump( $mijnVar );

die();



// optellen etc.
$num = 23;

//$num = $num + 7;
//$num += 7;
//$num++;

echo $num++;

echo '<br>';

echo ++$num;



die();



// rekenen met een string

$autos = '23 autos 123';

echo $autos;

echo '<hr>';

$autos = $autos + 1;

echo $autos;


die();





// samenstellen van verschillende variabelen
$type = 'auto';
$num = 1;

echo $type . ' ' . $num;

echo "$type $num";



die();

$tekst = "<a href=\"#\">dit is m'n tekst";

echo $tekst;



define('MIJN_NAAM', 'ikkus');

echo MIJN_NAAM;

$sTekst    = "Hello allemaal!"; // String
$sTekst    = 'Hello allemaal!'; // String
$iLeeftijd = 20; // Integer
$fPrijs    = 135.75; // Float
$bCheck    = true; // Boolean
$aAutos    = array( 'auto 1', 'auto 2');

$naam = 'mijn naam';


$counterEen = 0;


echo $naam;








echo '<hr>';


die( );


/*
 hier haal ik de info van de server op
*/
// dit is ook een commentaar
# dit is ook een commentaar

//phpinfo();

// Stukje tekst op verschillende regels
echo 'hoi<br>
hoi';

var_dump( 'hoi' );
print_r( 'hoi' );
