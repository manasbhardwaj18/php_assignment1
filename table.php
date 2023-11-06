<?php
require 'DbConnection.php';
$pdo = DbConnection::make();
$query = "SELECT * FROM Stduent_data";
$stmt = $pdo->query($query);
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Data</title>
    <style>
      body {
        
        background-color: #155263;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      }

        h1 {
            text-align: center;
            color: #3baea0;
            background-color: #ff9a3c;
            padding: 5px;
        }

        table {
        background-color:#f8b400 ;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 700px;
        margin: auto;
        margin-top: 10px;
        text-align: center;
        padding: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <h1>Student Data</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Subjects</th>
            <th>City</th>
        </tr>
        <?php foreach ($students as $student) : ?>
            <tr>
                <td><?php echo $student['Name']; ?></td>
                <td><?php echo $student['Gender']; ?></td>
                <td><?php echo $student['Subjects']; ?></td>
                <td><?php echo $student['City']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
