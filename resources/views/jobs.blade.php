<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        @foreach ($jobs as $job)
            <li>
            <a href="/jobs/{{$job['id']}}">
            <strong>{{$job['title']}}:</strong> Payes {{$job['salary']}} per year.
            </a>
            </li>
        @endforeach
    </body>
</html>

