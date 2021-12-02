<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Register | UNSCare
    </title>

    <link rel="stylesheet" href="{{asset('CostumStyle\css\regislog.css')}}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}">
    
</head>
<body>
    <div class="content tabelku">
        <div class="image-box animate__animated animate__fadeInLeft"> 
            <img src="{{ asset('CostumStyle/images/register.svg') }}">
        </div>
    <form method="POST" action="{{ route('register') }}" class="animate__animated animate__tada">
        @csrf

        <div class="topic">Create an Account</div>

            <div class="input-box">
                <input id="name" type="text" name="name" :value="old('name')" required>
                <label for="name" :value="__('Name')">Full Name</label>
            </div>
        
            <div class="input-box">
                <input id="email" type="email" name="email" :value="old('email')" required>
                <label for="email" :value="__('Email')">Email</label>
            </div>

            <div class="input-box">
                <input id="password" type="password" name="password" required autocomplete="new-password"> 
                <label for="password" :value="__('Password')">Password</label>
            </div>

            <div class="input-box">
                <input id="password_confirmation" type="password" name="password_confirmation" required> 
                <label for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>
            </div>

            <div class="input-box">
                <input type="submit" value="Register">
            </div>

            <div class="goto_regis">
                <span>Alredy have an account?</span>
                <a href="{{ url('login') }}" class="">
                    Login
                </a>
            </div>
    </form>
  </div>
</body>
</html>
