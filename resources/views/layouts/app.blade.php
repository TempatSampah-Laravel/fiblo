<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/icon/fiblo.png" type="image/x-icon">

    {{-- Tailwind CSS --}}
    <link rel="stylesheet" href="/css/app.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">

    {{-- Bootstrap icons --}}
    <link rel="stylesheet" href="/font/bootstrap-icons.css">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">

    <title>{{ env('APP_NAME') ." | ". $title ?? '' }}</title>
    {{ $style }}
</head>

<body class="antialiased flex">
    <x-_navbar></x-_navbar>
    <x-_notif></x-_notif>

    <div class="container main-container mt-2 mb-5 flex flex-col" style="padding-top: 100px">
        {{ $slot }}
    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>

    <script src="/js/image-previewer.js"></script>
    {{ $style }}
</body>

</html>