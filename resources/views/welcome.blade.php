<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                @foreach($trains as $train)
                <div class="card">
                    <p>{{$train->azienda}}</p>
                    <p>{{$train->stazione_di_partenza}}</p>
                    <p>{{$train->stazione_di_arrivo}}</p>
                    <p>{{$train->orario_di_partenza}}</p>
                    <p>{{$train->orario_di_arrivo}}</p>
                    <p>{{$train->codice_treno}}</p>
                    <p>{{$train->numero_carrozze}}</p>
                    @if($train->in_orario === 1)
                    <p>In orario</p>
                    @else
                    <p>In ritardo</p>
                    @endif

                    @if($train->cancellato === 1)
                    <p>Treno cancellato</p>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>