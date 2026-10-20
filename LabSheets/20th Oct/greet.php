<?php
    $submitted = false;

    if ($_SERVER["REQUEST_METHOD"]=== "POST"){
        $userName = $_POST["userName"];
        $age = $_POST["age"];
        $submitted = true;
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
            <p>UserName: <?php echo htmlspecialchars($userName); ?></p>
            <p>Age: <?php echo number_format($age, 0); ?></p>
        </div>

    </div>
</body>
</html>