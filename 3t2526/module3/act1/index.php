<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formative 3 - Lab Activity Part 1</title>
</head>
<body>
    <?php 
        $id = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        $name = array("Juan Dela Cruz", "Zhang Shan", "Fru Danmark",
                      "John Doe", "Kwasi Menssa", "Ivan Petrov", "Jean Dupont",
                      "Max Mustermann", "Lee Guil-Dong", "Nguyen La");
        $images = array("filipino.jpg", "chinese.jpg", "danish.jpg", "american.jpg",
                        "african.jpg", "bulgarian.jpg", "french.jpg", "german.jpg",
                        "korean.jpg", "viet.jpg");
        $age = array(25, 21, 35, 30, 38, 29, 28, 40, 26, 20);
        $contacts = array("+63-912-345-6789", "+86-10-1234-5678", "+45-12-34-56-78", "+1-202-555-0173", "+27-82-123-4567", 
                          "+359-2-123-4567",  "+33-1-23-45-67-89", "+49-30-1234-5678", "+82-10-1234-5678", "+84-24-1234-5678");
        $birthday = array("03-14-2001", "07-22-2005", "11-05-1991", "02-28-1996", "09-10-1988", 
                            "06-19-1997", "12-01-1998", "04-25-1986", "08-30-2000", "10-12-2006");
    ?>

    <table>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Contact Number</th>
        </tr>

        <?php for ($i = 0; $i < count($images); $i++) { ?>
            <tr>
                <td><?php echo $id[$i]; ?></td>
                <td><?php echo $name[$i]; ?></td>
                <td><img src="../images/<?php echo $images[$i]; ?>" alt="placeholder-image"></td>
                <td><?php echo $age[$i]; ?></td>
                <td><?php echo $birthday[$i]; ?></td>
                <td><?php echo $contacts[$i]; ?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>