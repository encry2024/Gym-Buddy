<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gym Buddy v1.0</title>
<!-- CSS START -->
        <link rel="stylesheet" href="{{ URL::to('/') }}/bootstrap/bootstrap-3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ URL::to('/') }}/css/font_color.css">
        <link rel="stylesheet" href="{{ URL::to('/') }}/css/font_size.css">
<!-- CSS END -->
        @yield('header')
    </head>

    <body>
        <div class="container-fluid">
            @yield('content')
        </div>
<!-- SCRIPT START -->
        <script src="{{ URL::to('/') }}/bootstrap/bootstrap-3.3.4/js/jquery-1.11.2.min.js"></script>
        <script src="{{ URL::to('/') }}/bootstrap/bootstrap-3.3.4/js/bootstrap.min.js"></script>
<!-- SCRIPT END -->
    </body>
</html>