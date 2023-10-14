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
            <h1>Edit To Do List</h1>
        </div>
        <div>
            <form action="" method="post" class="form">
                @csrf
                @method('PUT')

                <span>Name</span>
                <input type="text" name="name" placeholder="Task Name" required value="{{$task->name}}">

                <span>Descriptions</span>
                <input type="text" name="descriptions" placeholder="Task Descriptions..." value="{{$task->descriptions}}">

                <span>Priority</span>
                <select name="priority" id="" required>
                    <option value="{{$task->priority}}">{{$task->priority}}</option>
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                </select>

                <span>Due Date</span>
                <input type="date" name="date" placeholder="Date" value="{{$task->date}}">
                
                <span>Status</span>
                <select name="status" id="" required>
                    <option value="{{$task->status}}">{{$task->status}}</option>
                    <option value="pending">Pending</option>
                    <option value="in_progress">In Progress</option>
                    <option value="completed">Completed</option>
                </select>

                <input type="submit" value="Save">
                <div style="text-align: center; margin-top: 10px;">
                    <a href="{{URL::previous()}}" style="">Previous</a>
                </div>
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
