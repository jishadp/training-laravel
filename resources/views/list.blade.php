<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My First laravel Route</title>
</head>
<body>
    <h3>Students - Afseer P</h3>
    <h4><a href="{{ route('student.create') }}">New</a></h4>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>1</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->mobile }}</td>
                <td>{{ $student->email }}</td>
                <td>
                    <button>View</button>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>
