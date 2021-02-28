<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
    <header>
        header
        <div class="logo">
            Лого
        </div>
        <div class="main_menu">         
            <ul>
                <li>Бои</li>
                <li>Бойцы</li>
                <li>Турниры</li>
            </ul>
        </div>
    </header>

    <div class="content">
        @yield('content')
    </div>
       
    <footer>
        footer
    </footer>
</body>
</html>