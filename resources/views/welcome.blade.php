        <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>Get'em On The Road - so you can say Got'R Done!</title>

            <!-- Fonts -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

            <!-- Styles -->
            <link rel="stylesheet" href="{{ mix('css/app.css') }}">

            @livewireStyles

            <!-- Scripts -->
            <script src="{{ mix('js/app.js') }}" defer></script>
        </head>
        <body class="font-sans antialiased bg-black">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center">
                    <img id="logo" src="logo.png" class="m-6">


                </div>
                <div class="flex justify-center">
                    <a href="/register"><button type="button"><img src="register.png" width="150px"></button></a>
                    <a href="/login"><button type="button"><img src="login.png" width="150px"></button></a>
                </div>
            </div>
            @stack('modals')

            @livewireScripts
         </body>
</html>

