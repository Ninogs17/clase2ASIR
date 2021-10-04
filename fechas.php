<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio fechas</title>
</head>
<body>
    <h2>Ejercicios de tratamiento de fechas</h2>

    <p>Vamos a aprwnswe a tratar fechas en php y funcionalidades</p>
    <br>
    <?php

    echo "Vamos a trabajar con fechas"."<br>";
    echo "Hoy es: ".date("l")."<br>";
    echo "Dime la fecha actual: ".date("Y/M/j")."<br>";
    echo "Dime la fecha actual: ".date("j/M/Y")."<br>";

    $hora = date("H")
echo "<br>"."<br>"Ejercicio ejemplo if-else"."<br>"."<br>
    if($hora<15){
        echo "Lo siento, sigo en clases."."<br>";
        echo "Hora: ".$hora;

    }else{
        echo "Estoy en mi casa"."<br>";

echo "<br>"."<br>"Ejercicio ejemplo if-else"."<br>"."<br>
        if($hora<15){
            echo "Lo siento, sigo en clases."."<br>";
            echo "Hora: ".$hora;
    
        }else{
            echo "Estoy en mi casa"."<br>";
    }else{

    }

    $segundos = date("s")
    echo "<br>"."<br>"Ejercicio ejemplo if-else"."<br>"."<br>
        if($segundos<"10"){
            echo "Primeros 10 segundos."."<br>";
            echo "Segundos: ".$segundos;
    
        }elseif($Segundos>"50"){
            echo "Ultimos 10 segundos"."<br>";
            echo "Segundos: ".$segundos;


        }else{
            echo "Segundos intermedios"."<br>";
            echo "Segundos: ".$segundos;
        }


        echo "<br>"."<br>"."Ejercicio ejemplo Switch"."<br>"."<br>";
        $colores ="Rojo";

        switch ($colores) {
            case 'Rojo':
                echo "La sangre es de color: ".$colores."<br>";
                break;

                case 'Verde':
                echo "La hierba es de color: ".$colores."<br>";
                break;
            
                case 'Amarillo':
                echo "El sol es de color: ".$colores."<br>";
                break;

                case 'Azul':
                echo "El mar es de color: ".$colores."<br>";
                break;

            default:
                echo "El color: ".$colores." no está registrado en la base de datos.";
                break;
            }

    ?>
</body>
</html>