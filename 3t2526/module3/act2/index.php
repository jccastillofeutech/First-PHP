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
        $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

        $sum = 0;
        $prod = 1;

        $diff = $numbers[0];
        $quo = $numbers[0];

        foreach($numbers as $i => $num){
            $sum += $num;
            $prod *= $num;

            if($i != 0){
                $diff -= $num;
                $quo /= $num;
            }
        }

        $list = "";
        foreach ($numbers as $num){
            $list .= $num . " ";
        }
    ?>
    
    <table>
        <tr>
            <td colspan="2">
                Array List 
                <?php 
                    foreach ($numbers as $num) {
                        echo $num . ", ";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <th>Addition</th>
            <td><?php echo $sum; ?></td>
        </tr>
        <tr>
            <th>Subtraction</th>
            <td><?php echo $diff; ?></td>
        </tr>
        <tr>
            <th>Multiplication</th>
            <td><?php echo $prod; ?></td>
        </tr>
        <tr>
            <th>Division</th>
            <td><?php echo $quo; ?></td>
        </tr>
    </table>
</body>
</html>