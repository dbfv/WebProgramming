<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What do I name this...</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    ?> 
    <div class="equation-container">
        <p>ax<sup>2</sup> + bx + c = 0</p>
    </div>
    <form action="result.html.php" method="post">
        <div id="A">
            a:<input type="number" name="a" id="a">
        </div>
        <div id="B">
            b:<input type="number" name="b" id="b">
        </div>
        <div id="C">
            c:<input type="number" name="c" id="c">
        </div>

        <input class="solve" type="submit" value="Solve!" style="border-radius: 50px;">
    </form>
</body>
</html>