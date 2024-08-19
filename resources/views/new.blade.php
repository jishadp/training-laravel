<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is new page</h1>
    <h4><a href="{{ route('student.index') }}">List</a></h4>

    <form action="{{ route('student.save')}}" method="post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" id=""><br><br>
        <label for="">Mobile</label>
        <input type="text" name="mobile" id=""><br><br>
        <label for="">Email</label>
        <input type="text" name="email" id=""><br><br>

        <input type="submit" value="Save"/>
    </form>
</body>
</html>
