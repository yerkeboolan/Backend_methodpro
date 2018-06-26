<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
            @foreach($tasks as $task)
                <il>{{$task -> body}}</il>
                @endforeach
    </ul>
</body>
</html>