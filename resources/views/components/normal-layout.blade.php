<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- {{ HTML::style('css/cv.css') }} --}}
    {{-- {{ URL::asset('css/css.css') }} --}}
    <link rel="stylesheet" href="{{ asset('css/cv.css') }}">
    <title>{{ $title }}</title>
</head>

<body>
    {{ $slot }}
</body>

</html>
