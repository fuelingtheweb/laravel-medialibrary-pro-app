<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script defer src="js/react/app.js"></script>


    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
</head>

<body>
    <script>
        window.oldValues = {!! json_encode(Session::getOldInput()) !!};
        window.errors = {!! $errors !!};
        window.tempEndpoint = 'temp-upload';
    </script>

    <div class="p-4">
        <div>
            <p>errors: {{ $errors }}</p>
            <p>old values: {{ json_encode(Session::getOldInput()) }}</p>

            <form action="multi-upload" method="POST">
                @csrf

                <p>
                    <input name="name" type="text" placeholder="name" value="{{ old('name', '') }}" />
                </p>

                <div id="app"></div>
            </form>
        </div>
    </div>
</body>

</html>
