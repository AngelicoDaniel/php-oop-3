<?php

include_once __DIR__ . '/classi/generi.php';
include_once __DIR__ . '/classi/libro.php';
include_once __DIR__ . '/classi/audiolibro.php';


$generi = [
  'giallo' => new Generi('giallo', 'icon-font-awesome-giallo'),
  'horror' => new Generi('horror', 'icon-font-awesome-horror')
];
// var_dump( $generi );

$prodotti = [
  new Libro( 'La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://picsum.photos/200/300', 250, 'flessibile' ),
  new audioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://picsum.photos/200/300', 120, 'spotify', 'https://spotify-libri.com'),
];

var_dump( $prodotti );

foreach( $prodotti as $elem ){
  echo get_class($elem);
  echo "<br>";
  echo $elem->nome;
  echo "<br>";
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>php-oof-3</title>
  <!-- FontAwesome 6.2 -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
    integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
    crossorigin='anonymous' referrerpolicy='no-referrer'/>
  <!-- Bootstrap 5.2 css -->
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
    integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
  <link rel='stylesheet' href='./assets/css/style.css'>
</head>

<body>

    <div class="container">
      <div class="row">
          <?php foreach ($prodotti as $elem) { ?>
            <div class="card col-4 gap-3">
                <h4 class="card-title"><?php $elem->nome ?></h4>
                <p class="card-text"><?php $elem->autore ?></p>
                <img src="<?php echo $elem->immagine ?>"  class="card-img-top" alt="...">
            </div>
        <?php } ?>
      </div>
    </div>

  <!-- Bootstrap 5 script -->
  <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'
    integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin='anonymous'>
  </script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js'
    integrity='sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk' crossorigin='anonymous'>
  </script>
</body>

</html>