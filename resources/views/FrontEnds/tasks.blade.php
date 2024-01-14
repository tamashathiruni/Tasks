<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h2>Daily Tasks</h2>
            <!--validation -->
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
            @endforeach
            <form action="/saveTask" method="post">
            {{ csrf_field() }} <!--encrypt data -->
            <input type="text" class="form-control" placeholder="Enter Your Task Here" name="task">
            <br>
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="button" class="btn btn-warning" value="Clear">
            </form>
            <br><br>
            <table class="table table-dark">
                <th>ID</th>
                <th>Task</th>
                <th>Completed</th>
                <th>Action</th>
                @foreach($tasks as $task)
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->task}}</td>
                    <td>
                    @if($task->iscompleted)
                    <!--<td>{{$task->iscompleted}}</td>-->
                    <button class="btn btn-success">Completed</button>
                    @else
                    <button class="btn btn-warning">Not Completed</button>
                    @endif
                   </td>
                   <td><a href="#" class="btn btn-primary">Mark as Completed</a></td>
                </tr>
                @endforeach
            </table>
        </div>
        <!--<div class="img">
            <img src="/image/Screenshot.png" alt="">
        </div> -->
    </div>
</body>
</html>