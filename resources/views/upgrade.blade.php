<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upgrade List</title>
</head>
<body>
    @foreach ($data as $item)
    <p>{{$item['subcategory']}}</p>
    @endforeach
</body>
</html>
