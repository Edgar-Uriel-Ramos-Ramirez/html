<?php
header('content-type: application-json');
$numero = array();
for ($i=1; $i < 82; $i++) { 
    $numero[$i] = $_POST[$i];
    $message = $numero[$i];
    echo json_encode(array('message'=>$message));
}

/* // Se obtiene el string del contendio de la peticion (el JSON)
$dataStr = file_get_contents('php://input');

// Convertimos los datos que se recibieron en string en un array de PHP
$data = json_decode($dataStr, true);
$m = $data['m'];

// TODO: Implementacion del algoritmo para resolver el sudoku

// Creamos el array de la solución
$resultado = array_fill(0, 8, array_fill(0, 8, 0));
for($r = 0; $r < count($m); $r++){
    for($c = 0; $c < count$m[$r]; $c++){
        $resultado[$r][$c] = $m[$r][$c];
        if($m[$r][$c] == 0){
            $resultado[$r][$c] = rand(1, 9);
        }
    }
}

// Objeto de la respuesta
$r = array{
    'datosPeticion' => $data,
    'resuelto' => true,
    'resultado' => $resultado,
    'n_0_0' => $data['m'][0][0],
    'algunOtroDato' => $data ['algunOtroDato']
};

// El header del response, le indicamos qye el contenido es JSON
header('Content-Type: application/json');

// El array asocoativo $r lo convertimos a string y es lo que regresamos en la respuesta
echo json_encode($r); */