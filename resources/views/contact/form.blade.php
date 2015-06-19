<html>

<head>

    <title>Formulario de contacto</title>

</head>

<body>

    <h1>Rellena nuestro formulario</h1>

    @if (Session::has('message'))
        <div class="message" style="color:red">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="errors">

        <!--
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
         -->

        {!! Html::ul($errors->all()) !!}

    </div>

    {!! Form::open(['route' => 'contact_send', 'id' => 'mi_form']) !!}

        {!! Form::label('Tu nombre: ') !!}
        {!! Form::text('name', null, ['required', 'class' => 'inputname']) !!}

        <br />

        {!! Form::label('Tu email: ') !!}
        {!! Form::text('email', null, ['required', 'class' => 'inputemail', 'placeholder' => 'Introduce un email válido']) !!}
        <span class="erroremail">
            <!--
            @foreach($errors->get('email') as $error)
                {{ $error }}
            @endforeach
            -->

            {{ $errors->first('email') }}

        </span>

        <br />

        {!! Form::label('Tu mensaje: ') !!}
        {!! Form::textarea('message', null, ['class' => 'inputextarea']) !!}

        {!! Form::submit('Enviar mensaje', ['class' => 'botonenviar']) !!}

    {!! Form::close() !!}

</body>

</html>