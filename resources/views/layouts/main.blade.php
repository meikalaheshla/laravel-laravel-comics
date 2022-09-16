<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    {{--CSS--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css"/>

    {{--JS--}}
    <script src="{{asset('js/app.js')}}" defer></script>



</head>
<body>
    @include('includes.header')
    @include('includes.footer')
    
</body>
</html>