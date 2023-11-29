<?php
include_once("wordix.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* 
Nombres: CURILEF, CARLOS FAI-3288  -  BASCUR, SOFIA FAI-4306
Carrera: Tecnicatura en Desarrollo Web
Correos electrónicos: 
- carlos.curilef@est.fi.uncoma.edu.ar
- sofiabascur.80@gmail.com
Usuario Github: Carlos-Curilef
Usuario GitHub: Sofia-NB 
*/


/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/


/** 1)
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras(){ // Se agregó 5 palabras en la última fila
    // ARRAY $coleccionPalabras
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "ACTOR", "AGUDO", "ALTAR", "ABEJA", "CAMPO"
    ];

    return ($coleccionPalabras); // Retorna la colección de palabras
}

    /** 2)
     * inicializa una estructura de datos con ejemplos de Partidas y retorna la colección de partidas 
     * @return array
    */
    function cargarPartidas () { // NOMBRES USADOS: majo, lucas, sebastian, hernan, brandon; puntaje 0 al 17; intentos 1 al 15 
        // ARRAY $partidas
        $partidas = [
            ["palabraWordix"=> "GOTAS" , "jugador" => "majo", "intentos"=> 4, "puntaje" => 13],
            ["palabraWordix"=> "GATOS" , "jugador" => "lucas", "intentos"=> 3, "puntaje" => 14],
            ["palabraWordix"=> "QUESO" , "jugador" => "sebastian", "intentos"=> 15, "puntaje" => 0],
            ["palabraWordix"=> "RASGO" , "jugador" => "hernan", "intentos"=> 5, "puntaje" => 11],
            ["palabraWordix"=> "NAVES" , "jugador" => "majo", "intentos"=> 4, "puntaje" => 14],
            ["palabraWordix"=> "MELON" , "jugador" => "lucas", "intentos"=> 15, "puntaje" => 0],
            ["palabraWordix"=> "MELON" , "jugador" => "brandon", "intentos"=> 3, "puntaje" => 13],
            ["palabraWordix"=> "YUYOS" , "jugador" => "sabastian", "intentos"=> 2, "puntaje" => 16],
            ["palabraWordix"=> "ALTAR" , "jugador" => "brandon", "intentos"=> 5, "puntaje" => 12],
            ["palabraWordix"=> "QUESO" , "jugador" => "lucas", "intentos"=> 2, "puntaje" => 16],
            ["palabraWordix"=> "HUEVO" , "jugador" => "majo", "intentos"=> 15, "puntaje" => 0],
            ["palabraWordix"=> "YUYOS" , "jugador" => "sebastian", "intentos"=> 5, "puntaje" => 12],
            ["palabraWordix"=> "PISOS" , "jugador" => "majo", "intentos"=> 15, "puntaje" => 0],
            ["palabraWordix"=> "TINTO" , "jugador" => "lucas", "intentos"=> 2, "puntaje" => 16],
            ["palabraWordix"=> "AGUDO" , "jugador" => "lucas", "intentos"=> 1, "puntaje" => 13],
            ["palabraWordix"=> "ALTAR" , "jugador" => "hernan", "intentos"=> 3, "puntaje" => 14],
            ["palabraWordix"=> "QUESO" , "jugador" => "majo", "intentos"=> 5, "puntaje" => 11],
            ["palabraWordix"=> "CAMPO" , "jugador" => "brandon", "intentos"=> 4, "puntaje" => 12],
            ["palabraWordix"=> "QUESO" , "jugador" => "brandon", "intentos"=> 15, "puntaje" => 0],
            ["palabraWordix"=> "VERDE" , "jugador" => "sabastian", "intentos"=> 2, "puntaje" => 15],
            ["palabraWordix"=> "PIANO" , "jugador" => "lucas", "intentos"=> 15, "puntaje" => 0],
            ["palabraWordix"=> "PIANO" , "jugador" => "majo", "intentos"=> 3, "puntaje" => 13],
            ["palabraWordix"=> "TINTO" , "jugador" => "majo", "intentos"=> 1, "puntaje" => 17],
            ["palabraWordix"=> "ABEJA" , "jugador" => "lucas", "intentos"=> 2, "puntaje" => 12]
        ];

        return $partidas;
        
        
    }

/** 3)
 * Muestra las opciones del menú en la pantalla solicitando al usuario una opción válida,
 * en caso de ser inválida, vuelve a repetir las opciones anteriores. Finalmente retorna el número de la opción 
 * @return int
 */
function seleccionarOpcion () {
    // INT $opcion
        echo "******************************************************************************* \n";
        echo "1) Jugar al wordix con una palabra elegida \n";
        echo "2) Jugar al wordix con una palabra aleatoria \n";
        echo "3) Mostrar una partida \n";
        echo "4) Mostrar la primer partida ganadora \n";
        echo "5) Mostrar resumen de Jugador \n";
        echo "6) Mostrar listado de partidas ordenadas por jugador y por palabra \n";
        echo "7) Agregar una palabra de 5 letras a Wordix \n";
        echo "8) Salir \n";
        echo "\n";
        echo "******************************************************************************* \n";
        echo "\n";
        do{
        echo "Ingrese una opción (1/8): \n";
        $opcion = trim(fgets(STDIN));
        if (!(($opcion >= 1) && ($opcion <= 8))){
            echo "Número inválido, intentelo de nuevo. \n";
        }
    }while (!($opcion > 0 && $opcion <9)); // se repite mientras la opción no sea mayor a 0 y menor a 9
    $opcion = $opcion*1; // Asegura que el retorno sea un número

    return $opcion;
}

/** 3) SUBMENÚ
 * @return int
 */
function subMenu(){
    // INT $respuesta
    echo "\n";
    echo "¿Desea volver al menú principal? \n";
    echo "1) SI \n";
    echo "2) NO \n";
    echo "\n";
    echo "************************************************* \n";
    $respuesta = solicitarNumero(1,2); // ERROR!! No seleciona un número entre 1 y 2
    return $respuesta;
}


/** 4)
 * Esta funcion retorna la palabra escrita por el usuario
 * @return string
 */
function palabra5Letras()
{
    //string $palabra
    echo "Ingrese una palabra de 5 letras: \n";
    $palabra = trim(fgets(STDIN));
    $palabra  = strtoupper($palabra); // strtoupper: se encarga de cambiar la palabra a solo mayúsculas

    while ((strlen($palabra) != 5) || esPalabra($palabra)==false) { // strlen: se encarga de obtener la longuitud de un string (número)
        echo "Debe ingresar una palabra de 5 letras y sin números: \n";
        $palabra = strtoupper(trim(fgets(STDIN)));
    }
    return $palabra;
}


/** 5)
 * Esta funcion solicita un número valido
 * @param int $valorMinimo
 * @param int $valorMaximo
 * @return int
 */
function solicitarNumero($valorMinimo, $valorMaximo) {
    // INT $valorValido
    do {
        echo "Ingrese un valor entre " . $valorMinimo . " y " . $valorMaximo . ": \n";
        $valorValido = trim(fgets(STDIN));
        if (!(($valorValido >= $valorMinimo) && ($valorValido <= $valorMaximo))){
            echo "Número inválido, intentelo de nuevo. \n"; // se muestra un cartel ante un error
        }
    } while (!(($valorValido >= $valorMinimo) && ($valorValido <= $valorMaximo)));
    $valorValido = $valorValido*1; // asegura que $valorValido sea un número.
    return $valorValido;
}


/** 6)
 * Esta funcion muestra en pantalla los datos de una partida
 * @param array $partidas
 * @param int $numPart
 */
function datosPar($partidas, $numPart){
    echo "\n";
    echo "*************************************************\n";
    echo "\n";
    echo "Partida WORDIX ". $numPart+1 .": palabra ".$partidas[$numPart]["palabraWordix"]."\n";
    echo "Jugador: ".$partidas[$numPart]["jugador"]."\n";
    echo "Puntaje: ".$partidas[$numPart]["puntaje"]." puntos \n";
    if ($partidas[$numPart]["intentos"]<=6 && $partidas[$numPart]["intentos"]!=0){
        echo "Intento: adivinó la palabra en ".$partidas[$numPart]["intentos"]." intentos. \n";
    }else{
        echo "Intento: No adivinó la palabra. \n";
    }
    echo "\n";
    echo "*************************************************\n";
}

/** 7) 
 * Esta función se encarga de agregar una nueva palabra a la coleccion
 * @param array $colec
 * @param string $palabra
 * @return array
 */
function agregarPalabra($colec, $palabra){
    // INT $cont
    $cont=count($colec);
    $colec[$cont]=$palabra; // almacena la palabra nueva en un incide nuevo.
    return $colec;
}

/** 8) 
 * Esta función recibe una colección de partidas jugadas y el nombre de un jugador, luego retorna el índice de la primera victoria
 * @param array $coleccionPartida
 * @param string $nombreJugador
 * @return int
*/ 
function indicePartidaGanada($coleccionPartida, $nombreJugador) {
    // INT $contador, $partidasTotales, $indice
    // BOOLEAN $encontrado 

    $contador = 0;
    $partidasTotales = count($coleccionPartida);
    $encontrado = false;

    while (($contador < $partidasTotales) && ($encontrado == false)) {
        if ($coleccionPartida [$contador] ["jugador"] == $nombreJugador) {
            if($coleccionPartida [$contador] ["intentos"] > 0 && $coleccionPartida [$contador] ["intentos"] <7 && $coleccionPartida [$contador] ["puntaje"] > 0) {
                $encontrado = true;
                $indice = $contador;
            } else {
                $contador++;
            }
            
        } else {
            $contador++;
        }

        if ($encontrado == false) {
            $indice = -1;
        }
    }
    return $indice;
}


/** 9)
 * La función recibe una colección de partidas y el nombre de un jugador y muestra sus estadísticas
 * @param array $coleccion
 * @param string $jugador
 */
function resumenJugador($coleccion, $jugador) // 
{
    $numeroPartidas = 0;
    $partidasGanadas = 0;
    $acumPuntaje = 0;
    $intento1 = 0;
    $intento2 = 0;
    $intento3 = 0;
    $intento4 = 0;
    $intento5 = 0;
    $intento6 = 0;

    foreach ($coleccion as $key => $subarray) {
        if ($subarray["jugador"] == $jugador) { 
            $numeroPartidas++;

            if ($subarray["intentos"] < 7 && $subarray["intentos"] > 0){
                $partidasGanadas++;

                switch ($subarray["intentos"]) {
                    case 1:
                        $intento1++;
                        break;
                    case 2:
                        $intento2++;
                        break;
                    case 3:
                        $intento3++;
                        break;
                    case 4:
                        $intento4++;
                        break;
                    case 5:
                        $intento5++;
                        break;
                    case 6:
                        $intento6++;
                        break;
                }
            }

             $puntajePartidas = $subarray["puntaje"];
             $acumPuntaje = $acumPuntaje + $puntajePartidas;
        }
    }

    if ($numeroPartidas!=0){
        $porcentajeDeVictorias = ($partidasGanadas / $numeroPartidas) * 100;
    }else{
        $porcentajeDeVictorias = 0;
    }

    $arregloResumen = [
        "jugador" => $jugador,
        "partidas" => $numeroPartidas,
        "puntajes" => $acumPuntaje,
        "victorias" => $partidasGanadas,
        "porcentajeVictorias" => bcdiv($porcentajeDeVictorias, '1', 2)*1, //Reduce el número a dos decimales
        "intento1" => $intento1,
        "intento2" => $intento2,
        "intento3" => $intento3,
        "intento4" => $intento4,
        "intento5" => $intento5,
        "intento6" => $intento6,
    ];

    mostrarResumen($arregloResumen);
}  

/**
 * @param array $resumen
 */

 function mostrarResumen($resumen) {
    echo "*************************************************\n";
    echo "Jugador: " . $resumen["jugador"] . "\n";
    echo "Partidas: " . $resumen["partidas"] . "\n";
    echo "Puntaje Total: " . $resumen["puntajes"] . "\n";
    echo "Victorias: " . $resumen["victorias"] . "\n";
    echo "Porcentaje Victorias: ". $resumen["porcentajeVictorias"] ."% \n";
    echo "Adivinadas: \n";
    echo "    Intento 1: " . $resumen["intento1"] . "\n";
    echo "    Intento 2: " . $resumen["intento2"] . "\n";
    echo "    Intento 3: " . $resumen["intento3"] . "\n";
    echo "    Intento 4: " . $resumen["intento4"] . "\n";
    echo "    Intento 5: " . $resumen["intento5"] . "\n";
    echo "    Intento 6: " . $resumen["intento6"] . "\n";
    echo "*************************************************\n";
 }
    
  

  /** 9) FUNCIÓN AUXILIAR
   *  La función recibe una cantidad de intentos y devuelve el puntaje correspodiente a dicha cantidad
   * @param int $cantidadIntentos
   * @return int
   */
  function calcularPuntajeIntentos ($cantidadIntentos) {
    // INT $puntajeIntentos

    switch ($cantidadIntentos) { // Se calcula el puntaje de cada intento
        case 1:
            $puntajeIntentos = 6;
            break;
        case 2:
            $puntajeIntentos = 5;
            break;
        case 3:
            $puntajeIntentos = 4;
            break;
        case 4:
            $puntajeIntentos = 3;
            break;
        case 5:
            $puntajeIntentos = 2;
            break;  
        case 6:
            $puntajeIntentos = 1;
            break;      
        
        default:
        $puntajeIntentos = 0; // Si el puntaje es 0, es porque superó la cantidad de intentos permitidos, por lo que a la ahora de  llamar a la función "obtenerPuntajaWordix()", el puntaje final será 0 
            break;
    }

    return $puntajeIntentos;
  }

/** 10)
 * Esta funcion solicita el nombre del jugador y lo retorna en minúsculas
 * @return string
 */
function solicitarJugador(){
    //STRING $nomJugador, $primLetra
    do{
    echo "\n";
    echo "Ingrese el nombre del jugador: \n";
    $nomJugador=trim(fgets(STDIN));
    $primLetra=substr($nomJugador, 0); // substr: se encarga de substraer una letra o una cadena de letras de un string.
    if (ctype_alpha($primLetra)){
        strtolower($nomJugador); // strtolower: convierte un string es minúsculas.
    }else{
        echo "El nombre debe empezar con una letra, intentelo de nuevo. \n";
        $nomJugador="";
         } 
    } while ($nomJugador=="");
    return $nomJugador;
}

/** 11)
 * Esta funcion muestra la coleccion de partidas ordenada por nombre y palabra del jugador
 * @param array $coleccion
 */
function ordenDefinido($coleccion){
       uasort($coleccion, "ordenDef");
    return print_r($coleccion);
}

/**
 * Función de comparación
 * @return int
 */
// INT $orden
function ordenDef($a, $b){
    if ($a["jugador"]==$b["jugador"]){
        if($a["palabraWordix"]<$b["palabraWordix"]){
        $orden = -1;
        }else{
            $orden=1;
        }
    }elseif($a["jugador"]<$b["jugador"]){
        $orden = -1;
    }else{
        $orden=1;
    }
    return $orden;
}

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/
/*

ARRAY $coleccionPalabras, $partidasCargadas, $partida
STRING $nombre, $palabra, $nom, $cincoLetras
INT $opcion, $opcionSubMenu, $numPalabras, $valor, $i, $cont, $indicePrimeraVictoria

*/

$coleccionPalabras=cargarColeccionPalabras(); // se carga la coleccion de palabras
$partidasCargadas=cargarPartidas(); // se carga la coleccion de partidas
$opcion=seleccionarOpcion(); // se muestra el menú 
$nombre="";
$opcionSubMenu = 0;
$contador = 0;
    do{
    if ($opcionSubMenu == 1) { // Imprime el menú principal al selecionar (1) para volver
        $opcion = seleccionarOpcion();
    }
    switch ($opcion){
        case 1: // Jugar al wordix con una palabra elegida
            $nombre=solicitarJugador(); // se solicita nombre del jugador
            $numPalabras=count($coleccionPalabras);
            $cantPartidas=count($partidasCargadas);
            $valor=solicitarNumero(1, $numPalabras); // se solicita el número de la palabra a jugar
            while ($contador < $cantPartidas){
            if ($partidasCargadas[$contador]["jugador"] == $nombre && $coleccionPalabras[$valor-1] == $partidasCargadas[$contador]["palabraWordix"]){
                echo "La palabra numero ".$valor ." ya fue elegida, elija otro valor. \n";
                        echo "\n";
                        $valor=solicitarNumero(1, $numPalabras); // se solicita otro valor si es ese el caso   
                        $contador=0;
            }else{
                $contador++;
            }
            
        }
        $contador=0;

            $palabra = $coleccionPalabras[$valor-1]; // se guarda una palabra válida
            $partida = jugarWordix($palabra, $nombre); // se envía a la función para jugar la partida
            array_push($partidasCargadas, $partida); // se agrega el resumen de la partida en la coleccion de partidas 

            break;
        case 2: // Jugar al wordix con una palabra aleatoria, se usó la misma lógica que el caso 1, solo cambia que la elección la realiza la función aleatoria "rand()"
            $nombre=solicitarJugador(); // se solicita nombre del jugador
            $numPalabras=count($coleccionPalabras);
            $cantPartidas=count($partidasCargadas);
            $valor=rand(1, $numPalabras); // se solicita el número de la palabra a jugar

            while ($contador < $cantPartidas){
                if ($partidasCargadas[$contador]["jugador"] == $nombre && $coleccionPalabras[$valor-1] == $partidasCargadas[$contador]["palabraWordix"]){
                    $valor=rand(1, $numPalabras);
                    $contador=0;
                }else{
                    $contador++;
                }
            }
            $contador=0;

            $palabra = $coleccionPalabras[$valor-1]; // se guarda una palabra válida
            $partida = jugarWordix($palabra, $nombre); // se envía a la función para jugar la partida
            array_push($partidasCargadas, $partida); // se agrega el resumen de la partida en la coleccion de partidas

            break;
        case 3: // Mostrar una partida
            $cont=count($partidasCargadas);
            datosPar($partidasCargadas, solicitarNumero(1, $cont)-1); // se solicita al usuario un número válido de partida, se resta -1 para tener el indice y se muestran los datos
            break;
        case 4: // Mostrar la primer partida ganadora
            $nombre=solicitarJugador();
            $indicePrimeraVictoria=indicePartidaGanada($partidasCargadas, $nombre); // se obtiene el indice de la primera victoria
            if ($indicePrimeraVictoria==-1){
                echo "El jugador " .$nombre. " no ganó ninguna partida. \n"; // si el indice es -1, no existen victorias
            }else{
                datosPar($partidasCargadas, $indicePrimeraVictoria); // de lo contrario, se muestran los datos
            }
            break;
        case 5: // Mostrar resumen de Jugador
            $nom=solicitarJugador();
            resumenJugador($partidasCargadas, $nom);
            break;
        case 6: // Mostrar listado de partidas ordenadas por jugador y por palabra
            ordenDefinido($partidasCargadas);
            break;
        case 7: // Agregar una palabra de 5 letras a Wordix
            $cincoLetras=palabra5Letras();
            $coleccionPalabras=agregarPalabra($coleccionPalabras, $cincoLetras);
    }

    if ($opcion!=8) { // Esta alternativa evita que vuelva a imprimir el subMenu al salir del juego
        $opcionSubMenu = subMenu();
    }
} while ($opcion!=8);


/* 12.e)
- Sofia Bascur
Switch pertenece a la estructura de control alternativa, se utiliza
cuando se quiere ejecutar la misma variable dependiendo de la condición.
case: Se escribe la condicion, si es verdadera el switch se ejecuta por primera vez.
break: Se encarga de romper el ciclo del case, si no se agrega el break, switch ejecutará las siguientes condiciones.
default: Si ninguno de los case es verdadero, default se encarga de mostrar una opción predeterminada.

- Carlos Curilef
Switch es una estructura de control alternativa que permite realizar una única acción dado
una variable discreta, es decir, teniendo el valor de una variable permite ejecutar una única acción que es similar a otra.
Si el valor no se encuentra contemplado, retornará un valor por default indicado por el programador

*/