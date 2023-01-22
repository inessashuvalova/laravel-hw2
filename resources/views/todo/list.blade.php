<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
</head>
<body>
    <h1>Список задач</h1>

    @foreach ($list as $item)
        <p>
           <ul style="list-style-type: none">
              <li>Название: <a href="{{ url('/todo/'.$item->id)}}">{{ $item->title }}</a></li>
           </ul>
        </p>
    @endforeach

<a href="{{ url('/') }}">Вернуться на главную страницу</a>
</body>
</html>