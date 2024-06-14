<?php
// hola mundo
echo "Hola, PHP \n";
/*
este es un comentario
*/

// variables

$my_string = "Esto es una cadena";
$my_string = "cambio la cadena";

echo $my_string . "\n";
echo gettype($my_string) . "\n";

$my_string = 6;
echo $my_string . "\n";
echo gettype($my_string) . "\n";

$my_string = "Esto es una cadena";

$my_int = 7;
$my_int = $my_int + 4;
echo $my_int - 1 . "\n";
echo $my_int . "\n";
echo gettype($my_int) . "\n";

$my_double = 6.5;
echo $my_double . "\n";
echo gettype($my_double) . "\n";

$result = $my_int + $my_double . "\n";
echo $result . "\n";
echo gettype($result) . "\n";

$my_bool = true;
echo $my_bool . "\n";
echo gettype($my_bool) . "\n";

echo "el valor del entero es $my_int y el del booleano es $my_bool . \n";

const MY_CONSTANT = "Esto es una constante";
echo MY_CONSTANT . "\n";
echo gettype(MY_CONSTANT) . "\n";

// listas

$my_array = [ $my_string, $my_bool];
echo $my_array [0] . "\n";
echo $my_array [1] . "\n";
array_push($my_array, $my_double) . "\n";
echo $my_array [2] . "\n";
echo gettype($my_array) . "\n";
print_r($my_array) . "\n";
array_push($my_array, "martin") . "\n";
array_push($my_array, "martin") . "\n";
echo gettype($my_array) . "\n";
print_r($my_array) . "\n";
print_r(array_unique($my_array)) . "\n";


// diccionario

$my_dict = array("string" => $my_string, "int" => $my_int, "bool" => $my_bool);
echo gettype($my_dict) . "\n";
print_r($my_dict) . "\n";
echo $my_dict ["int"] . "\n";

// flujos

for ($i=0; $i < 10; $i++) { 
    # code...
    echo $i . "\n";
}

foreach($my_array as $i){
    echo $i . "\n";
}

$a = 0;
while ($a <= sizeof($my_array) - 1) {
    # code...
    echo $my_array[$a] . "\n";
    $a ++;
}

// funciones

function print_number (int $my_num){
    echo $my_num . "\n";
}

print_number(10.5);
print_number(11);
print_number(12);

class MyClass {
    public $name;
    public $age;

    function __construct($name, $age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }
}

$my_class = new MyClass("martin", 47);
print_r($my_class) . "\n";
echo $my_class -> name . "\n";
$my_class -> name = "carlos" . "\n";
print_r($my_class) . "\n";
echo $my_class -> name . "\n";