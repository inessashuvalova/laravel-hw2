<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
</head>
<body>
<h1>Описание задачи</h1>

    <p>
        <ul style="list-style-type: none">
            <li>ID №: {{ $item->id }}</li>
            <li>Название: {{ $item->title }}</li>
            <li>Описание: {{ $item->description }}</li>
            <li>Создана: {{ $item->created_at }}</li>
            <li>Изменена: {{ $item->updated_at }}</li>
        </ul>
    </p>

<a href="{{ url('/') }}">Вернуться на главную страницу</a>
<a href="{{ url('/todo') }}">Вернуться к списку задач</a>
</body>
</html>