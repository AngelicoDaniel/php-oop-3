<?php

include_once __DIR__ . '/classi/generi.php';
include_once __DIR__ . '/classi/libro.php';
include_once __DIR__ . '/classi/audiolibro.php';
include_once __DIR__ . '/classi/cd.php';
include_once __DIR__ . '/classi/dvd.php';
include_once __DIR__ . '/classi/employee.php';


$generi = [
  'giallo' => new Generi('giallo', 'icon-font-awesome-giallo'),
  'horror' => new Generi('horror', 'icon-font-awesome-horror')
];
// var_dump( $generi );

$prodotti = [
  new Libro( 'La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://picsum.photos/200/300', 250, 'flessibile' ),
  new audioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://picsum.photos/200/300', 120, 'spotify', 'https://spotify-libri.com'),
  new CD('lorem ipsum', 'dolores',  23.40, $generi['horror'], true,'https://picsum.photos/200/300', 'mp3'),
  new DVD('dvd name', 'dvd author',  66.6, $generi['giallo'], true,'https://picsum.photos/200/300', 'durata dvd'),
  new Employee('marco', 'rossi', 170)

];

var_dump( $prodotti );

foreach( $prodotti as $elem ){
  echo get_class($elem);
  echo "<br>";
  echo $elem->nome;
  echo "<br>";
}
?>