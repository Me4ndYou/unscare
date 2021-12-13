<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Login | UNSCare
    </title>

    <link rel="stylesheet" href="{{asset('CostumStyle\css\regislog.css')}}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}">
    
</head>
<body>
    <header class="animate__animated animate__fadeInDown">
        <a href="{{ url('/') }}" class="logo">
            <h3 class="logoname">UNSCare</h3>
        </a>
    </header>
    <div class="content">
        <div class="image-box animate__animated animate__fadeInLeft"> 
            <img src="{{ asset('CostumStyle/images/login.svg') }}">
        </div>
    <form method="POST" action="{{ route('login') }}" class="animate__animated animate__tada">
        @csrf
        <div class="topic">Welcome Back!</div>
            <div class="input-box">
                <input id="email" type="email" name="email" :value="old('email')" required>
                <label for="email" :value="__('Email Address')">Email Address</label>
            </div>
        
            <div class="input-box">
                <input id="password" type="password" name="password" required autocomplete="current-password">
                <label for="password" :value="__('Password')">Password</label>
            </div>

            <div class="remember">
                <input id="remember_me" type="checkbox" name="remember" class="checkmark">       
                <label for="remember_me">Remember me</label>
            </div>
        
            <div class="input-box">
                <input type="submit" value="Submit">
            </div>

            <div class="goto_regis">
                <span>Not registered yet?</span>
                <a href="{{ url('register') }}" class="">
                    Register Here!
                </a>
            </div>
    </form>
  </div>
</body>
</html>
