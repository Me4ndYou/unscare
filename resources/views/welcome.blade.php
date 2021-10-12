<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Home Page | UNSCare
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Style -->
    <link href="{{asset('CostumStyle\css\homepage.css')}}" rel="stylesheet">
    <link href="{{asset('https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css')}}" rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}">
    
</head>

<body>
    <section>
        <header class="animate__animated animate__slideInDown">
             <!--<a href="#"><img src="{{ asset('CostumStyle\HomePage\homelogo.PNG') }}" class="logo" alt=""></a>-->
            <div>
                <h3 class="logoname">
                    UNSCare
                </h3>
            </div>
            <ul>
                <li><a href="{{ url('notfound') }}">FAQS</a></li>
                <li><a href="{{ url('notfound') }}">ABOUT</a></li>
                <li><a href="{{ url('login') }}">LOGIN</a></li>
                <li><a href="{{ url('register') }}">REGISTER</a></li>
            </ul>
        </header>
        <div class="content">
            <div class="textBox">
                <h2 class="animate__animated animate__slideInLeft">Keep the family<br>in the loop</h2>
                <p class="animate__animated animate__slideInUp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius culpa est magni voluptas nam animi sit porro cumque consequuntur, necessitatibus ipsam quae mollitia quas aut temporibus, a perferendis aliquam. Velit!</p>
            </div>
            <div class="imgBox">
                <img src="{{ asset('CostumStyle\HomePage\undraw_doctors_hwty.svg') }}" class="animate__animated animate__fadeIn" alt="">
            </div>
        </div>
    </section>    
</body>

</html>
