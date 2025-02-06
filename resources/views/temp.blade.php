<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    @include('components.navbar')
    @include('components.banner')
    @include('components.class')
    @include('components.location')
    @include('components.signin')
    @include('components.context')
    @include('components.about')
    @include('components.endpage')
    @include('components.footer')

    {{--    @include('components.llocation')
   --}}

</body>

</html>
