<?php

  function build($cadenaParentesis){

    $parentesis = '()';

    $resultado = '';

    $cantidadRepite = substr_count($cadenaParentesis, '()');

    if ($cantidadRepite > 0){
      for ($i = 0; $i <$cantidadRepite; $i++){
        $resultado.='()';
      }
    }else {
      $resultado = '';
    }

    return $resultado;

  }

    $cadena1 = '()())()';
    $cadena2 = '()(()';
    $cadena3 = ')(';
    $cadena4 = '((()';

      echo 'Entrada 1 --> "'.$cadena1.'"'.''.'<br> Salida 1 ----> "'.build($cadena1).'"<br><br>';
      echo 'Entrada 2 --> "'.$cadena2.'"'.''.'<br> Salida 2 ----> "'.build($cadena2).'"<br><br>';
      echo 'Entrada 3 --> "'.$cadena3.'"'.''.'<br> Salida 3 ----> "'.build($cadena3).'"<br><br>';
      echo 'Entrada 4 --> "'.$cadena4.'"'.''.'<br> Salida 4 ----> "'.build($cadena4).'"<br><br>';

 ?>
