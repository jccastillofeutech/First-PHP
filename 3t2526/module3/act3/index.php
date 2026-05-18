<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        function chosenum($num1, $num2, $num3) {
            $sum = $num1 + $num2 + $num3;
            $diff = $num1 - $num2 - $num3;
            $prod = $num1 * $num2 * $num3;
            $quo = $num1 / $num2 / $num3;

            echo "<table>
                    <tr>
                        <td colspan='2'>My Parameter values: $num1, $num2, $num3</td>
                    </tr>
                    <tr>
                        <th>Addition</th><td>$sum</td>
                    </tr>
                    <tr>
                        <th>Subtraction</th><td>$diff</td>
                    </tr>
                    <tr>
                        <th>Multiplication</th><td>$prod</td>
                    </tr>
                    <tr>
                        <th>Division</th><td>$quo</td>
                    </tr>
                  </table>";
        }
        chosenum(67, 20, 35)
    ?>
</body>
</html>