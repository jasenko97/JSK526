<?php
  header( 'Access-Control-Allow-Origin: *' );
  header( 'Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept' );

  if ( isset( $_GET['seite'])  ) {

    switch( $_GET['seite']) {
      case '1': echo '<p>Seite 1</p>'; break;
      case '2': echo '<p>Seite 2</p>'; break;
      case '3': echo '<p>Seite 3</p>'; break;
    }

  }  else {

    echo 'Seite nicht definiert.';

  }
