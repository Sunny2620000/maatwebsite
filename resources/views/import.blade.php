<!DOCTYPE html>
<html lang="en">
<head>
    <title>CSV Import</title>
</head>
<body>
    <h2>Import Users CSV</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('import.users') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit">Import CSV</button>
    </form>
</body>
</html>
