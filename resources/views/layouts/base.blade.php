<html>
<head>
    <title>Mi proyecto</title>

    <link rel="stylesheet" href="{{asset('/assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/responsive.css')}}">
</head>

<body>

     @include('layouts.parts.header ')

    <div>
        @section('menu')

            MENU BASICO BONITO

        @show
    </div>

    <div class="contenido">
        @yield('contenido')
    </div>

    @yield('empresas')

    <div>PIE</div>

</body>
</html>