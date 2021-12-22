<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('head_link')

    <title>@yield('title_page')</title>
</head>
<body>
    <header>
        @yield('header_body')
    </header>
    <main>
        @yield('main_body')
    </main>
    <footer>
        @yield('footer_body')
    </footer>
</body>
</html>