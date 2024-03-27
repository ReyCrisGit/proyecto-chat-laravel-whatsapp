<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactos</title>
</head>
<body>
    <ol>
        @foreach ($contacts as $contact)
            <li>{{$contact->name}} <a href="#">New Chat</a></li>
        @endforeach
    </ol>
</body>
</html>