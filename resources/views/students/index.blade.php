<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;1,600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }
     </style>
</head>
<body>
    <h1>Student Records</h1>
    <table border='1'>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Gender</th>
        @foreach ($student as $students) {
            <tr>
                <td>{{ $students->firstname }}</td>
                <td>{{ $students->middlename }}</td>
                <td>{{ $students->lastname }}</td>
                <td>{{ $students->email }}</td>
                <td>{{ $students->gender}}</td>
            </tr>
        }
        @endforeach
    </table>
</body>
</html>