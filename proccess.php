<?php

$varNombre = $_POST["nombre"];
$varEdad = $_POST["edad"];

echo "$varNombre, tu edad es $varEdad";

if($varEdad>=18){
    echo "$varNombre,  puedes imgresar";
}
elseif($varEdad<18){
    echo"$varNombre, estas muy pollo, ve a ver pepa pig";
}
else{
    echo"ingreso una edad incorrecta";
}
?>