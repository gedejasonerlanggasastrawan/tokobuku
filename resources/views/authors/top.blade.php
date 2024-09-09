<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Top 10 Most Famous Authors</h1>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Author Name</th>
            <th>Voters</th>
        </tr>
    </thead>
    <tbody>
        @foreach($authors as $index => $author)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $author->name }}</td>
                <td>{{ $author->voters }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>

