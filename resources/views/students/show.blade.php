<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1><?= htmlspecialchars($student->name) ?></h1>
        
        <p><strong>Email:</strong><?= htmlspecialchars($student->email) ?></p>
        <p><strong>Age:</strong><?= htmlspecialchars($student->age) ?></p>

        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('students.destroy', $student->id) }} " method = "POST" style="display:inline;">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form> 
    
    </div>
</body>
</html>