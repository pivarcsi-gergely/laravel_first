<?php

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboards</title>
</head>
<body>
<h1>Speedrun leaderboards</h1>
<table>
    <tr>
        <th>Runner</th>
        <th>Game title</th>
        <th>Category</th>
        <th>Time (seconds)</th>
    </tr>
    @foreach($records as $record)
    <tr>
        <td>{{$record->user->name}}</td>
        <td>{{$record->gaem->name}}</td>
        <td>{{$record->category}}</td>
        <td>{{$record->time}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
