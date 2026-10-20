<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $num1 = (float) $_POST["num1"];
        $num2 = (float) $_POST["num2"];
        $opt = $_POST["opt"];

        switch ($opt) {
            case "add":
                $result = $num1 + $num2;
                break;

            case "subtract":
                $result = $num1 - $num2;
                break;

            case "multiply":
                $result = $num1 * $num2;
                break;

            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero";
                }
                break;

            default:
                $result = "Invalid operation";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Form</title>
    <style>
        div input[type="submit"], a {
            display: block;
            margin:0 auto;
            background-color: #0b132b;
            color: #39ff88 ;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            text-decoration:none;
            border-radius: 14px;
            cursor: pointer;
        }
        div input[type="submit"]:hover,a:hover {
            cursor:pointer;
            text-decoration:none;
            background-color:#39ff88;
            color:#0b132b;
        }
    </style>
</head>
<body style="background-color: #f2f2f2; padding: 20px; display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div style="display: flex; flex-direction:column ;font-family: Times New Roman, serif; font-size:1rem; background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <div class="result">
            <p>First Number: <?php echo $num1; ?></p>
            <p>Second Number: <?php echo $num2; ?></p>
            <p>Operation: <?php echo htmlspecialchars($opt); ?></p>
            <p>Result: <?php echo $result; ?></p>
        </div>

    </div>
</body>
</html>