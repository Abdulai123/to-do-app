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
            <h1>Your To Do Lists</h1>
            <a href="/create">Add</a>
        </div>
        @isset($success)
        <p class="success">{{$success}}</p>
        @endisset

        <div class="display_to_do">
            <table>
                <thead>
                    <tr>
                        <th>--{✔️}--</th>
                        <th>Name</th>
                        <th>Descriptions</th>
                        <th>Priority</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $item)
                        <tr>
                            <td>
                                @if ($item['status'] == 'completed')
                                    <input type="checkbox" checked>
                                @else
                                    <input type="checkbox">
                                @endif
                            </td>

                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['descriptions'] }}</td>
                            <td class="{{ $item['priority'] }}">{{ $item['priority'] }}</td>
                            <td class="{{ $item['status'] }}">{{ $item['status'] }}</td>
                            <td>{{ date('F j, Y', strtotime($item['date'])) }}</td>
                            <td class="actions">
                                <a href="/edit/{{ $item['id'] }}"><img
                                        src="{{ @asset('storage/icons/edit_square.png') }}" alt="edit"
                                        srcset=""></a>

                                        <form action="/delete/{{ $item['id'] }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"><img src="{{ @asset('storage/icons/delete.png') }}" alt="delete"srcset=""></button>
                                        </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <p style="text-align: center; font-size:15px; color:#ccc;">Created with ❤️ by Abdulai ©️ 14/10/2023</p>
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
