<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>404 Not Found</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="{{asset('CostumStyle\css\errors\404.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}">
</head>

<body>
    <div class="container">
        <h2 class="animate__animated animate__tada">Oops! You Got Us</h2>
        <img src="{{ asset('CostumStyle\others\undraw_warning_cyit.svg') }}" alt="">
        <p>We're working on this! :)</p>
        <a href="{{ url('/') }}">Go back home</a>
    </div>        
</body>

</html>
