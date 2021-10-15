<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('users.create') }}" method="POST">
        @csrf
        <input type="number" name="amount" min="1" max="10" id="">
        <button type="submit">create</button>
    </form>

</body>
</html>
