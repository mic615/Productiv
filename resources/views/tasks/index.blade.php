<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Tasks</h1>
    <ul>
        @foreach ( $tasks as $task)
          <li>{{$task->title}}</li>
        @endforeach
    </ul>
  </body>
</html>
