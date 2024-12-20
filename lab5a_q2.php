<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php 
        // Associative array with students' details
        $students = [
            ["Name" => "Osama", "Program" => "BIS", "Age" => 23],
            ["Name" => "Mohammed", "Program" => "BIP", "Age" => 22],
            ["Name" => "Ahmed", "Program" => "BIT", "Age" => 21]
        ];
    ?>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student["Name"]; ?></td>
            <td><?php echo $student["Program"]; ?></td>
            <td><?php echo $student["Age"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
