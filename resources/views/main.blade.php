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
<body class="bg-gray-200">
    <header class="bg-black flex justify-between text-white p-6">
        
        <div class="logo">
            Лого
        </div>

        <div class="main_menu">         
            <ul class="flex">
                <li class="pl-2 pr-2">
                    <a href="/shedules"> Бои</a>
                   
                </li>
                <li class="pl-2 pr-2">
                    <a href="/">Бойцы</a>
                    
                </li>
                <li class="pl-2 pr-2">
                    <a href="/leagues">Турниры</a>
                    
                </li>
            </ul>
        </div>

        <div class="login">
            login
        </div>

    </header>

    <div class="content w-4/5 m-auto mt-4">
        @yield('content')
    </div>
       
    <footer class="bg-black">
        footer
    </footer>
</body>
</html>