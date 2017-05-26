<?php

  function build($arrayRango){

    $primerItem = reset($arrayRango);

    $arrayNuevo = [];

    $resultado = '';

    for ($i=reset($arrayRango); $i <= end($arrayRango); $i++) {

      $arrayCompleto[] = $primerItem++;
        $resultado.=($primerItem-1).',';
    }

    return '['.substr($resultado, 0, -1).']';

  }

    $arrayRango1 = [1,2,4,5];
    $arrayRango2 = [2,4,9];
    $arrayRango3 = [55,58,60];

      echo 'Arreglo 1 Inicial ------> '.'[1,2,4,5]'.' <br> Arreglo 1 Completo --> '.build($arrayRango1).'<br><br>';
      echo 'Arreglo 2 Inicial ------> '.'[2,4,9]'.' <br> Arreglo 2 Completo --> '.build($arrayRango2).'<br><br>';
      echo 'Arreglo 3 Inicial ------> '.'[55,58,60]'.' <br> Arreglo 3 Completo --> '.build($arrayRango3).'<br><br>';

 ?>
