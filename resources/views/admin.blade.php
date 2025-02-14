<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
</head>
<body>
    <h1>Admin - Generate Link</h1>
    <form action="/admin" method="post">
        @csrf
        <input type="text" name="name" placeholder="Masukkan Nama" required>
        <button type="submit">Generate</button>
    </form>
    <h2>Generated Links:</h2>
    <ul>
        @foreach($names as $name)
            <li><a href="/{{ $name }}">/{{ $name }}</a></li>
        @endforeach
    </ul>
</body>
</html>
