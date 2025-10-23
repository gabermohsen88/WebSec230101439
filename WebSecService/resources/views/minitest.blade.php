<!DOCTYPE html>
<html>
<head>
    <title>MiniTest - Supermarket Bill</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Supermarket Bill</h2>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php $grandTotal = 0; @endphp
            @foreach($bill as $item)
                @php $total = $item['quantity'] * $item['price']; @endphp
                @php $grandTotal += $total; @endphp
                <tr>
                    <td>{{ $item['item'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $total }}</td>
                </tr>
            @endforeach
            <tr class="table-warning">
                <td colspan="3"><strong>Grand Total</strong></td>
                <td><strong>{{ $grandTotal }}</strong></td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>
