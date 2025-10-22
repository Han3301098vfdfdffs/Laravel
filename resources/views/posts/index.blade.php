<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Coders Free</title>
    </head>
    <body>

        @for ($i = 1; $i <= $count; $i++)

            {{-- @continue ($i % 3 == 0) --}}

            @break ($i == 8)

            <p>
                {{ $i}}
            </p>
            
        @endfor

        <p>
            <b>
                Saliste del bucle
            </b>
        </p>
    </body>
</html>