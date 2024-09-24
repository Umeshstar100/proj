<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Final Price Calculator</h1>
        <form action="calculate.php" method="POST">
        <label for="price">Original Price ($):</label>
        <input type="number" id="price" name="price" required step="0.01"><br>
        <label for="discount">Discount Amount ($):</label>
        <input type="number" id="discount" name="discount" required step="0.01"><br>
        <label for="tax">Tax Rate (%):</label>
        <input type="number" id="tax" name="tax" required step="0.01"><br>

        <button type="submit"> Calculate final Price</button>
        </form>
    </div>
</body>
</html>