<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Simple Calculator</h2>
    <div class="row">
        <div class="col-md-6">
            <form id="calcForm">
                <div class="mb-3">
                    <label for="num1" class="form-label">Number 1</label>
                    <input type="number" class="form-control" id="num1" required>
                </div>
                <div class="mb-3">
                    <label for="num2" class="form-label">Number 2</label>
                    <input type="number" class="form-control" id="num2" required>
                </div>
                <div class="mb-3">
                    <label for="operation" class="form-label">Operation</label>
                    <select class="form-select" id="operation">
                        <option value="add">Add (+)</option>
                        <option value="subtract">Subtract (-)</option>
                        <option value="multiply">Multiply (×)</option>
                        <option value="divide">Divide (÷)</option>
                    </select>
                </div>
                <button type="button" class="btn btn-primary" onclick="calculate()">Calculate</button>
            </form>
            <div class="mt-3">
                <h4>Result: <span id="result">0</span></h4>
            </div>
        </div>
    </div>
</div>

<script>
function calculate() {
    let num1 = parseFloat(document.getElementById('num1').value);
    let num2 = parseFloat(document.getElementById('num2').value);
    let operation = document.getElementById('operation').value;
    let result = 0;

    if (operation === 'add') {
        result = num1 + num2;
    } else if (operation === 'subtract') {
        result = num1 - num2;
    } else if (operation === 'multiply') {
        result = num1 * num2;
    } else if (operation === 'divide') {
        if (num2 !== 0) {
            result = num1 / num2;
        } else {
            alert('Cannot divide by zero');
            return;
        }
    }

    document.getElementById('result').textContent = result;
}
</script>
</body>
</html>
