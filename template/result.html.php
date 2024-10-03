<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result...</title>
    <link rel="stylesheet" href="template/style.css">
    <style>
        .centered {
            width: 50%; /* adjust the width as needed */
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            font-size: 50px;
        }
        .center-button {
            text-align: center;
            margin-top: 20px;
            border-radius: 50px;
        }
    </style>
</head>
<body>
    <div class="centered">
        <?php echo $result; ?>
    </div>
    <div class="center-button">
        <button onclick="location.href='template/index.html.php'">Back</button>
    </div>
</body>
</html>