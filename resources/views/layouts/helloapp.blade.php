<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h1>@yield('title')</h1> 
       @section('menubar')
       <ul>
            <li>@show</li>
        </ul>
        <div class="content">
        @yield('content')
        </div>
        <div class="footer">
        @yield('footer')
        </div>
</body>
</html>