<!DOCTYPE html>
<html>
<head>
    <title>Student Transcript</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Student Transcript</h2>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Course</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course['course'] }}</td>
                    <td>{{ $course['grade'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
