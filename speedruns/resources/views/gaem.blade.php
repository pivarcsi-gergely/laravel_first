<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaem</title>
</head>
<body>
    <h1>{{$gaem -> name}}</h1>
    <ul>
        @foreach($gaem->records as $record)
        <li>{{$record->time}} s, in {{$record->category}}, done by {{$record->user->name}}</li>
        @endforeach
    </ul>
</body>
</html>
