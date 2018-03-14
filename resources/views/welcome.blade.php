<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel ExeProject</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <ul>
        @foreach ($tasks as $task)
            <li><a href="task/{{$task->id}}">{{ $task->title}}</a></li>
        @endforeach
    </ul>
    <h4><a href="about">Click here to know about us</a></h4>
</body>
</html>