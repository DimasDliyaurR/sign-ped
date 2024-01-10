<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show sign</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <a href="{{ asset('sign') }}" class="btn btn-primary">Back</a>
    <div class="container">

        <div class="bg-danger p-3 text-white">
            @foreach ($data as $row)
                <p>{{ $row->id }}</p>
                <img src="{{ $row->img }}" alt="">
            @endforeach
        </div>
    </div>
</body>

</html>
