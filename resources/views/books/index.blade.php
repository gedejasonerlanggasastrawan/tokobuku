<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="{{ route('books.index') }}">
        <label>List shown: </label>
        <select name="limit">
            @for ($i = 10; $i <= 100; $i += 10)
                <option value="{{ $i }}" {{ request('limit') == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>
        <br>
        <label>Search: </label>
        <input type="text" name="search" value="{{ request('search') }}">
        <button type="submit">Submit</button>
    </form>
    
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Book Title</th>
                <th>Category</th>
                <th>Author Name</th>
                <th>Average Rating</th>
                <th>Voters</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $index => $book)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->category->name }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>{{ number_format($book->average_rating, 2) }}</td>
                    <td>{{ $book->voters }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>





