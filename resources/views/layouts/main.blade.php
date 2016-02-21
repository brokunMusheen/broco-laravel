<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>@yield('title', 'Broco Laravel Boilerplate')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('head_includes')

</head>
<body>

    @yield('body_head_includes')

    @yield('content')

    @yield('body_tail_includes')

</body>
</html>
