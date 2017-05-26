<?php


  function build ($cadena){

    $resultado = '';

    $arregloCadena = str_split($cadena);

    foreach ($arregloCadena as $varreglo) {
      if (is_numeric($varreglo)){
        //echo '1. Es numero ';
        $resultado.=$varreglo;
      } else {
        if (ctype_upper($varreglo)){
          if($varreglo == 'Z'){
            //echo '2. Es la letra Z ';
            $resultado.='A';
          }else {
            //echo '3. No es la letra Z ';
             $resultado.=++$varreglo;
          }
        }else {
          if($varreglo == 'z'){
            //echo '4. Es la letra z ';
            $resultado.='a';
          }else {
            //echo '5. No es la letra z ';
             $resultado.=++$varreglo;
          }
        }
      }
    }

    return $resultado;

  }

  $cadena1 = '123 abcd*3';
  $cadena2 = '"**Casa 52';
  $cadena3 = '**Casa 52Z';

    echo 'Entrada 1 --> '.'123 abcd*3'.' <br> Salida 1 ----> '.build($cadena1)."<br><br>";
    echo 'Entrada 2 --> '.'"**Casa 52'.' <br> Salida 2 ----> '.build($cadena2)."<br><br>";
    echo 'Entrada 3 --> '.'**Casa 52Z'.' <br> Salida 3 ----> '.build($cadena3);

 ?>
