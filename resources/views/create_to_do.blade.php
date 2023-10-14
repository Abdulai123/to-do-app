<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ @asset('css/styles.css') }}">
    <title>To Do Application Using Laravel </title>
</head>

<body>
    <div class="container">
        <div class="top">
            <h1>Add A To Do List</h1>
        </div>
        <div>
            <form action="/" method="post">
                @csrf

                <input type="text" name="name" placeholder="Task Name" required>

                <select name="priority" id="" required>
                    <option value="">---Select Priority---</option>
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                </select>

                <input type="date" name="date" placeholder="Date">
                <input type="text" name="descriptions" placeholder="Task Descriptions...">
                <input type="submit" value="Create">
            </form>
        </div>
    </div>

    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</body>

</html>
