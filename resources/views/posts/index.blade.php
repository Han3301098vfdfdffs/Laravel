<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Coders Free</title>
    </head>
    <body>
        
        @switch($dia)
            @case(1)
                
                <p>Lunes </p>
                @break
            @case(2)
                
                <p>Martes </p>
                @break
            @case(3)
                
                <p>Miercoles </p>
                @break
            @case(4)
                
                <p>Jueves </p>
                @break
            @case(5)
                
                <p>Viernes </p>
                @break
            @case(6)
                
                <p>Sábado </p>
                @break
            @case(7)
                
                <p>Domingo </p>
                @break
            @default
                <p>El día no existe</p>
        @endswitch

    </body>
</html>