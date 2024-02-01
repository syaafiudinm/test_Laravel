<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hi your address is {{$address}}</p>

    @for ($i = 0; $i < 10; $i++)
        <p>ini adalah angka {{$i}}<br></p>
    @endfor
</body>
</html>