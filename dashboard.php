<?php
require 'connect.php';
$result = $conn->query("SELECT * FROM detections");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <title>UMUCYO Security Dashboard</title>
</head>
<body>

    <h1 style="text-align: center; color: green;">
        INTRUSION DETECTION SYSTEM
    </h1>

    <table style="margin: 0 auto; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="border: 1px solid black; padding: 10px;">id</th>
                <th style="border: 1px solid black; padding: 10px;">distance_detected</th>
                <th style="border: 1px solid black; padding: 10px;">Date</th>
                <th style="border: 1px solid black; padding: 10px;">led_status</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td style="border: 1px solid black; padding: 10px;"><?= $row['id'] ?></td>
                <td style="border: 1px solid black; padding: 10px;"><?= $row['distance_detected'] ?></td>
                <td style="border: 1px solid black; padding: 10px;"><?= $row['date'] ?></td>
                <td style="border: 1px solid black; padding: 10px;"><?= $row['led_status'] ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</body>
</html>
