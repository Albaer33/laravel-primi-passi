<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>HELLO WORLD!</h1>
    <h2>my name is {{$name}} {{$lastname}}, and i'm {{$age}}</h2>
    <div>
        My principal hobbies are: 
        <ul>
            @foreach ($hobbies as $hobby)
                <li>{{$hobby}}</li>
            @endforeach
        </ul>        
    </div>
</body>
</html>