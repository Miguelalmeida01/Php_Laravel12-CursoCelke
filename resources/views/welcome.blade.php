<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>php laravel</title>
</head>
<body>
    <h2 style="text-align: center;">bem vindo</h2>    


    <h4 style="text-align: center;">
        <a href="{{ route('user.index') }}">Usuários</a>
    </h4>
</body>
</html>