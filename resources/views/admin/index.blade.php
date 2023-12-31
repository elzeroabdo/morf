
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <h1>admins</h1>

    @foreach ($alladmin as $admin)
        <li>{{ $admin->name }}</li>
        @foreach(json_decode($admin->images) as $image)
            <img src="{{ asset('storage/'.$image) }}" alt="">
        @endforeach
    @endforeach
</body>
</html>
