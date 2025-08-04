<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.7/brite/bootstrap.min.css" integrity="sha512-vUEVlKv8R6q9Mr9FmSRAotAjwh8NQwDpyQ583+hDjxtwcMubsAefNc+vYxZPfqO6reIvqz3MeO2W0rS+Ez7Rqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ $title ?? 'Read A Book' }}</title>
</head>
<body class="container">

    <div class="mt-2">{{ $navbar ?? '' }}</div>

    <main class="mt-5">
        {{ $slot }}
    </main>

</body>
</html>
