<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .calculator {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            font-size: 18px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .result {
            font-size: 22px;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="calculator">
    <h2>PHP Calculator</h2>
    <form method="get">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <select name="operation">
            <option value="add">Add (+)</option>
            <option value="subtract">Subtract (-)</option>
            <option value="multiply">Multiply (×)</option>
            <option value="divide">Divide (÷)</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <input type="submit" name="submit" value="Calculate">
    </form>
    <div class="result"><?= $this->e($result) ?></div>
</div>
</body>
</html>