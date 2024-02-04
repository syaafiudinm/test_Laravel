<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    <form action="{{route('store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="number" name="score" placeholder="score">
        <button type="submit">Add</button>
        {{-- <input type="text" name="" placeholder="name">
        <input type="text" name="" placeholder="name"> --}}
    </form>
</body>
</html>