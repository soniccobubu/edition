<div>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$page}}</title>

        <!-- Fonts -->
        <!-- Styles -->
        <style>
            a{
                color: cyan;
            }
          </style>
    </head>
    <body>
        @include('parts/nav')
        @include("pages/$page")
    </body>
    </html>

    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
</div>
