<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<div class="container">
    <header>
        <h1>
            <a href="#">
                <img src="https://tfgms.com/sandbox/dailyui/logo-1.png" alt="Authentic Collection">
            </a>
        </h1>
    </header>
    <h1 class="text-center">Register</h1>

    <form class="registration-form" action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label class="col-one-half">
            <span class="label-text">Название</span>
            <input type="text" name="name" id="name" required>
        </label>
        <label class="col-one-half">
            <span class="label-text">Постер</span>
            <input type="file" name="poster" id="poster" required>
        </label>
        <button class="submit" type="submit">
            <span>Сохранить</span>
        </button>
    </form>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{ asset("assets/js/create.js") }}"></script>
</div>
</body>
</html>
____________________________________________________



{{--<form class="registration-form">--}}
{{--    <label class="col-one-half">--}}
{{--        <span class="label-text">First Name</span>--}}
{{--        <input type="text" name="firstName">--}}
{{--    </label>--}}
{{--    <label class="col-one-half">--}}
{{--        <span class="label-text">Last Name</span>--}}
{{--        <input type="text" name="lastName">--}}
{{--    </label>--}}
{{--    <label>--}}
{{--        <span class="label-text">Email</span>--}}
{{--        <input type="text" name="email">--}}
{{--    </label>--}}
{{--    <label class="password">--}}
{{--        <span class="label-text">Password</span>--}}
{{--        <button class="toggle-visibility" title="toggle password visibility" tabindex="-1">--}}
{{--            <span class="glyphicon glyphicon-eye-close"></span>--}}
{{--        </button>--}}
{{--        <input type="password" name="password">--}}
{{--    </label>--}}
{{--    <label class="checkbox">--}}
{{--        <input type="checkbox" name="newsletter">--}}
{{--        <span>Sign me up for the weekly newsletter.</span>--}}
{{--    </label>--}}
{{--    <div class="text-center">--}}
{{--        <button class="submit" name="register">Sign Me Up</button>--}}
{{--    </div>--}}
{{--</form>--}}
