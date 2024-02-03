<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
</head>
<body>
    <p> ID : {{$student->id}}</p>
    <p> name : {{$student->nama}}</p>
    <p> score : {{$student->score}}</p>

    <p>activities : </p>
    @foreach ($student->activities as $activity)
        <p>{{$loop->index + 1}} . {{ $activity->name }}</p>
    @endforeach
</body>
</html>