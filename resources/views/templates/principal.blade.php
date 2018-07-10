<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>
        
    @if (session('message'))
        <div class="container alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('message') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="container alert alert-danger" role="alert">
            
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            
        </div>
    @endif
 
    <div class="container">
        @yield('container')
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>