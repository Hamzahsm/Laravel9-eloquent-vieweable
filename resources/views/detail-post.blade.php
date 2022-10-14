<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    {{-- how to display total count view --}}
    <p>views {{ views($post)->count(); }}</p>

    {{-- if you want calculate by unique user --}}
    <p>views {{ views($post)->unique()->count(); }}</p>

    {{-- if you want to caching, use this code below --}}
    <p>views {{ views($post)->remember()->count(); }}</p>
</body>
</html>