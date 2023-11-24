<?php

// Incluye archivo a la db
include 'conexiondb.php';

// Obtener la consulta desde el formulario
$variable_marca = htmlspecialchars( $_POST['marca'], ENT_QUOTES, 'UTF-8');
$variable_almacenamiento = htmlspecialchars( $_POST['almacenamiento'], ENT_QUOTES, 'UTF-8');
$variable_precio = htmlspecialchars( $_POST['precio'], ENT_QUOTES, 'UTF-8');
$variable_ram = htmlspecialchars($_POST['ram'], ENT_QUOTES, 'UTF-8');

//$valor = filter_var($_POST['valor']);

// Imprimir variables 
//echo "Variable 1: " . $variable_marca . "<br>";
//echo "Variable 2: " . $variable_almacenamiento . "<br>";
//echo "Variable 3: " . $variable_precio . "<br>";
//echo "Variable 4: " . $variable_ram . "<br>";


//Se valida que todas las variables tengan información y no estén vacías
if (!empty($variable_marca) && !empty($variable_almacenamiento) && !empty($variable_precio) && !empty($variable_ram)) {

    //A partir de acá se realizan los diferentes selects a la base de datos, según las variables que se escogieron

    //SAMSUNG
    //RAM
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '32' && $variable_precio == '500' && $variable_ram == '4ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios < 500 
                    AND Marca = 'samsung' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if( $variable_marca == 'samsung' && $variable_almacenamiento == '32' && $variable_precio == '500' && $variable_ram == '6ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios < 500 
                    AND Marca = 'samsung' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'";
    }
    if( $variable_marca == 'samsung' && $variable_almacenamiento == '32' && $variable_precio == '500' && $variable_ram == '8ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios < 500 
                    AND Marca = 'samsung' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'";
    }
    //PRECIO
    //1000
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '32' && $variable_precio == '1000' && $variable_ram == '4ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >= 500 AND Precios <1000
                    AND Modelo LIKE '%32gb%'
                    AND Marca = 'samsung' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '32' && $variable_precio == '1000' && $variable_ram == '6ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >= 500 AND Precios <1000
                    AND Modelo LIKE '%32gb%'
                    AND Marca = 'samsung' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '32' && $variable_precio == '1000' && $variable_ram == '8ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >= 500 AND Precios <1000
                    AND Modelo LIKE '%32gb%'
                    AND Marca = 'samsung' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    //1999 - 2000
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '32' && ($variable_precio == '1999' or $variable_precio == '2000') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >= 1000
                    AND Modelo LIKE '%32gb%'
                    AND Marca = 'samsung' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    //ALMACENAMIENTO
    //64
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '64' && $variable_precio == '500' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios <500
                    AND Marca = 'samsung'
                    AND Modelo LIKE '%64gb%' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '64' && $variable_precio == '1000' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >= 500 AND Precios <1000
                    AND Marca = 'samsung'
                    AND (Modelo LIKE '%64gb%' OR Modelo LIKE '%64 GB%')
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '64' && ($variable_precio == '1999' or $variable_precio =='2000') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >= 1000
                    AND Marca = 'samsung'
                    AND (Modelo LIKE '%64gb%' OR Modelo LIKE '%64 GB%')
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    //128
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '128' && $variable_precio == '500' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios <500
                    AND Marca = 'samsung'
                    AND Modelo LIKE '%128gb%' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '128' && $variable_precio == '1000' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >=500 AND Precios <=1000
                    AND Marca = 'samsung'
                    AND Modelo LIKE '%128gb%' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '128' && $variable_precio == '1999' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >=1000 AND Precios <=1999
                    AND Marca = 'samsung'
                    AND Modelo LIKE '%128gb%' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '128' && $variable_precio == '2000' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >=2000
                    AND Marca = 'samsung'
                    AND Modelo LIKE '%128gb%' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    //512
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '512' && ($variable_precio == '500' or $variable_precio == '1000' or $variable_precio == '1999') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios <=1999
                    AND Marca = 'samsung'
                    AND Modelo LIKE '%512gb%' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '512' && $variable_precio == '2000' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >=2000
                    AND Marca = 'samsung'
                    AND (Modelo LIKE '%512gb%' OR Modelo LIKE '%512 GB%')
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    //APPLE
    if ($variable_marca == 'apple' && ($variable_almacenamiento == '32' or $variable_almacenamiento == '64') && ($variable_precio == '500' or $variable_precio == '1000' or $variable_precio == '1999' or $variable_precio == '2000')  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<2000 
                    AND Marca = 'apple' 
                    AND Modelo NOT LIKE '%adaptador%' AND Modelo NOT LIKE '%carcasa%' 
                    AND Modelo NOT LIKE '%cable%'";
    }
    //128
    if ($variable_marca == 'apple' && $variable_almacenamiento == '128' && ($variable_precio == '500' or $variable_precio == '1000' or $variable_precio == '1999')  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<2000 
                    AND Marca = 'apple' 
                    AND Modelo NOT LIKE '%adaptador%' AND Modelo NOT LIKE '%carcasa%' 
                    AND Modelo NOT LIKE '%cable%'";
    }
    if ($variable_marca == 'apple' && $variable_almacenamiento == '128' && $variable_precio == '2000'  && $variable_ram == '4ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>2000 
                    AND Marca = 'apple'
                    AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
                    AND Memoria_RAM='4GB' 
                    AND Modelo NOT LIKE '%adaptador%' AND Modelo NOT LIKE '%carcasa%' 
                    AND Modelo NOT LIKE '%cable%'";
    }
    if ($variable_marca == 'apple' && $variable_almacenamiento == '128' && $variable_precio == '2000'  && ($variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>2000 
                    AND Marca = 'apple'
                    AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
                    AND Memoria_RAM='6GB'
                    AND Modelo NOT LIKE '%adaptador%' AND Modelo NOT LIKE '%carcasa%' 
                    AND Modelo NOT LIKE '%cable%'";
    }
    //512
    if ($variable_marca == 'apple' && $variable_almacenamiento == '512' && ($variable_precio == '500' OR $variable_precio == '1000' or $variable_precio == '1999') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<2000 
                    AND Marca = 'apple'
                    AND Modelo NOT LIKE '%adaptador%' AND Modelo NOT LIKE '%carcasa%' 
                    AND Modelo NOT LIKE '%cable%'";
    }
    if ($variable_marca == 'apple' && $variable_almacenamiento == '512' && $variable_precio == '2000'  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>2000 
                    AND Marca = 'apple'
                    AND (Modelo LIKE '%512gb%' OR Modelo LIKE '%512 GB%')
                    AND Modelo NOT LIKE '%adaptador%' AND Modelo NOT LIKE '%carcasa%' 
                    AND Modelo NOT LIKE '%cable%'";
    }
    //MOTOROLA
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '32' && ($variable_precio == '500' or $variable_precio == '1000' or $variable_precio == '1999' or $variable_precio == '2000')  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<2000
                    AND Modelo LIKE '%32gb%'
                    AND Marca = 'Motorola' 
                    AND Modelo NOT LIKE '%cargador%'";
    }
    //64
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '64' && $variable_precio == '500'  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<500
                    AND Modelo LIKE '%64gb%'
                    AND Marca = 'Motorola' 
                    AND Modelo NOT LIKE '%cargador%'";
    }
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '64' && $variable_precio == '1000'  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=500 AND Precios <1000
                    AND Modelo LIKE '%64gb%'
                    AND Marca = 'Motorola' 
                    AND Modelo NOT LIKE '%cargador%'";
    }
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '64' && ($variable_precio == '1999' or $variable_precio == '2000') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=1000
                    AND Modelo LIKE '%64gb%'
                    AND Marca = 'Motorola' 
                    AND Modelo NOT LIKE '%cargador%'";
    }
    //128
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '128' && $variable_precio == '500' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<500
                    AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
                    AND Marca = 'Motorola' 
                    AND Modelo NOT LIKE '%cargador%'";
    }
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '128' && $variable_precio == '1000' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=500 AND Precios<1000
                    AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
                    AND Marca = 'Motorola' 
                    AND Modelo NOT LIKE '%cargador%'";
    }
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '128' && $variable_precio == '1999' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=1000 AND Precios<2000
                    AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
                    AND Marca = 'Motorola' 
                    AND Modelo NOT LIKE '%cargador%'";
    }
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '128' && $variable_precio == '2000' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=2000
                    AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
                    AND Marca = 'Motorola' 
                    AND Modelo NOT LIKE '%cargador%'";
    }
    //512
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '512' && ($variable_precio == '500' or $variable_precio == '1000' or $variable_precio == '1999' or $variable_precio == '2000') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE (Modelo LIKE '%512gb%' OR Modelo LIKE '%512 GB%')
                    AND Marca = 'Motorola' 
                    AND Modelo NOT LIKE '%cargador%'";
    }
    //XIAOMI
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '32' && $variable_precio == '500' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<500
                    AND (Modelo LIKE '%32gb%' OR Modelo LIKE '%32 GB%')
                    AND Marca = 'xiaomi' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%power%'
                    AND Modelo NOT LIKE '%audifonos%'";
    }

    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '32' && ($variable_precio == '1000' or $variable_precio == '1999' or $variable_precio == '2000') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=500
                    AND (Modelo LIKE '%32gb%' OR Modelo LIKE '%32 GB%')
                    AND Marca = 'xiaomi' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%power%'
                    AND Modelo NOT LIKE '%audifonos%'";
    }
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '32' && ($variable_precio == '1000' or $variable_precio == '1999' or $variable_precio == '2000') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=500
                    AND (Modelo LIKE '%32gb%' OR Modelo LIKE '%32 GB%')
                    AND Marca = 'xiaomi' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%power%'
                    AND Modelo NOT LIKE '%audifonos%'";
    }


    //64
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '64' && $variable_precio == '500' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<500
                    AND (Modelo LIKE '%64gb%' OR Modelo LIKE '%64 GB%')
                    AND Marca = 'xiaomi' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%power%'
                    AND Modelo NOT LIKE '%audifonos%'";
    }
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '64' && $variable_precio == '1000'  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=500 AND Precios <1000
                    AND (Modelo LIKE '%64gb%' OR Modelo LIKE '%64 GB%')
                    AND Marca = 'xiaomi' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%bank%'
                    AND Modelo NOT LIKE '%audifonos%'";
    }
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '64' && ($variable_precio == '1999' or $variable_precio == '2000')  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=1999
                    AND (Modelo LIKE '%64gb%' OR Modelo LIKE '%64 GB%')
                    AND Marca = 'xiaomi' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%power%'
                    AND Modelo NOT LIKE '%audifonos%'";
    }
    //128
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '128' && $variable_precio == '500'  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<500
                    AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
                    AND Marca = 'xiaomi' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%bank%'
                    AND Modelo NOT LIKE '%audifonos%'";
    }
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '128' && $variable_precio == '1000'  && $variable_ram == '6ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=500 AND Precios<1000
                    AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
                    AND (Modelo LIKE '%6    ram%' OR Modelo LIKE '%6gb ram%')
                    AND Marca = 'xiaomi' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%bank%'
                    AND Modelo NOT LIKE '%audifonos%'";
    }
    
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '128' && $variable_precio == '1000'  && $variable_ram == '8ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=500 AND Precios<1000
                    AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
                    AND (Modelo LIKE '%8ram%' OR Modelo LIKE '%8gb ram%')
                    AND Marca = 'xiaomi' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%bank%'
                    AND Modelo NOT LIKE '%audifonos%'";
    }

    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '128' && $variable_precio == '1000'  && $variable_ram == '4ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=500 AND Precios<1000
                    AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%') 
                    AND (Modelo LIKE '%4ram%' OR Modelo LIKE '%4gb ram%')
                    AND Marca = 'xiaomi' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%bank%'
                    AND Modelo NOT LIKE '%audifonos%'";
    }

    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '128' && $variable_precio == '1999'  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=1000 AND Precios<1999
                    AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
                    AND Marca = 'xiaomi' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%bank%'
                    AND Modelo NOT LIKE '%audifonos%'";
    }
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '128' && $variable_precio == '2000'  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=2000
                    AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
                    AND Marca = 'xiaomi' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%bank%'
                    AND Modelo NOT LIKE '%audifonos%'";
    }
    //512
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '512' && ($variable_precio == '500' or $variable_precio == '1000' or $variable_precio == '1999' or $variable_precio == '2000') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE (Modelo LIKE '%512gb%' OR Modelo LIKE '%512 GB%')
                    AND Marca = 'xiaomi' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%bank%'
                    AND Modelo NOT LIKE '%audifonos%'";
                }

}else{
    echo "Datos incompletos";
}

/*
<b>Marca: </b> <?php echo $marca; ?> <br>
*/


//Realiza una consulta a la base de datos y almacena el resultado en la variable $resultado
$resultado = $conexion->query($consulta);

//Verifica si la consulta fue exitosa
if ($resultado) {
    //Inicia un bucle para recorrer cada fila de resultados
    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                        //Extrae los datos de la fila actual y los almacena en variables
                        $marca = $row['Marca'];
                        $modelo = $row['Modelo'];
                        $precio = $row['Precios'];
                        ?>

                    <!--Presenta la información de cada fila en formato HTML dentro de un div-->
                    <div>
                        <b>Modelo: </b> <?php echo $modelo; ?> <br>
                        <b>Precio: </b> <?php echo $precio ?>.000 <br>
                    </div>
                    <?php
    }
}


//Cierra la conexión a la base de datos
$conexion = null;

?>
