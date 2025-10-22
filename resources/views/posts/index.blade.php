<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Coders Free</title>
    </head>
    <body>
        <h1>Aquí se mostrará el listado de posts</h1>

        @if(false)

            <p>Este mensaje se mostrará sí el valor de la condicional es verdadera</p>

        @else

            <p>Este mensaje se mostrará sí el valor de la condicional es falsa</p>

        @endif

        @unless (true)
            <p>Le has pasado el valor de false a la directiva unless</p>
        @endunless

        @isset($prueba45)
            <p>La variable existe y tiene un valor asignado</p>
        @else
            <p>La variable no existe o no tiene un valor asignado</p>
            
        @endisset

        @empty($prueba45)
            <p>La variable no existe o no tiene un valor asignado</p>
        @endempty

    </body>
</html>