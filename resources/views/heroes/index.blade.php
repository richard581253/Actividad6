<!DOCTYPE html>
<html>
<head>
    <title>Superheroes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #111;
            color: white;
            padding: 40px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #1e1e1e;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #333;
        }

        tr:nth-child(even) {
            background-color: #2a2a2a;
        }

        tr:hover {
            background-color: #444;
        }
    </style>
</head>
<body>

<h1>Lista de Superhéroes</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Nombre Real</th>
            <th>Género</th>
            <th>Universo ID</th>
        </tr>
    </thead>
    <tbody>
        <h2>Total: {{ count($heroes) }}</h2>
        @foreach($heroes as $hero)
        <tr>
            <td>{{ $hero->id_universe }}</td>
            <td>{{ $hero->name }}</td>
            <td>{{ $hero->real_name }}</td>
            <td>{{ $hero->gender }}</td>
            <td>{{ $hero->id_universe }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>