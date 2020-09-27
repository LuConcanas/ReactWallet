<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- agregamos el csrf-token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- agregamos los estilos que compilamos  --}}
        <link rel="stylesheet" href={{mix("css/app.css")}}>
    </head>
    <body>
        <div class="content">
            <div id="example">
            </div>
        </div>
    </body>
    {{-- agregamos el archivo app.js que se encarga de traer al componente --}}
    <script type="text/javascript" src={{mix("js/app.js")}}></script>
</html>
