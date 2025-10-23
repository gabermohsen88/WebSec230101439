<!DOCTYPE html>
<html>
<head>
    <title>GPA Simulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">GPA Simulator</h2>
    <form id="gpaForm">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Code</th>
                    <th>Title</th>
                    <th>Credit Hours</th>
                    <th>Grade (0-4)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $index => $course)
                <tr>
                    <td>{{ $course['code'] }}</td>
                    <td>{{ $course['title'] }}</td>
                    <td>{{ $course['credit'] }}</td>
                    <td>
                        <input type="number" step="0.01" min="0" max="4" class="form-control grade" data-credit="{{ $course['credit'] }}">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" onclick="calculateGPA()">Calculate GPA</button>
    </form>
    <div class="mt-3">
        <h4>Your GPA: <span id="gpaResult">0.00</span></h4>
    </div>
</div>

<script>
function calculateGPA() {
    let grades = document.querySelectorAll('.grade');
    let totalPoints = 0;
    let totalCredits = 0;

    grades.forEach(function(input) {
        let grade = parseFloat(input.value) || 0;
        let credit = parseFloat(input.dataset.credit);
        totalPoints += grade * credit;
        totalCredits += credit;
    });

    let gpa = totalCredits ? (totalPoints / totalCredits) : 0;
    document.getElementById('gpaResult').textContent = gpa.toFixed(2);
}
</script>
</body>
</html>
