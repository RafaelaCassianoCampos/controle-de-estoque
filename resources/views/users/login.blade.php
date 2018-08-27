<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | Controle de Estoque</title>
        <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
    </head>
    <body>
        <section class="content-login">

            <h1>Controle de Estoque</h1>

            {!! Form::open(['route' => 'users.login', 'method' => 'post']) !!}

            <label for="user-number">
                {!! Form::text('user-number', null, ['class' => 'input', 'placeholder' => 'Número do Usuário']) !!}
            </label>
            <label for="password">
                {!! Form::password('password', ['placeholder' => 'Senha']) !!}
            </label>


            {!! Form::submit('Entrar') !!}

            {!! Form::close() !!}

        </section>
    </body>
</html>
