<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Acme</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>

    @include('includes.navbar')

    <div class="container">
        @if(Request::is('/'))
            @include('includes.showcase')
        @endif
        <div class="row m-5">
            <div class="col-md-8 col-lg-8">
                @include('includes.messages')
            </div>
            <div class="col-md-4 col-lg-4">
                @include('includes.sidebar')
            </div>
        </div>
    </div>

    <footer id="footer" class="text-center ">
        <p> Copyright 2020 &copy; Acme </p>
    </footer>
</body>
</html>
