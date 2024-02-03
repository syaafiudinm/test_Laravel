<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Score</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->nama}}</td>
                <td>{{$student->score}}</td>
            </tr>
        @endforeach
    </table>

    current page : {{$students->currentPage()}} <br>
    total page : {{$students->total()}} <br>
    data per page : {{$students->perPage()}} <br>

    {{ $students->links('pagination::bootstrap-4') }}

</body>
</html>