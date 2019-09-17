<?php

include "class/Staff.php";
include "database/DBConnect.php";
include "class/StaffManager.php";

$staffManager = new StaffManager();
$staffs = $staffManager->getAll();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="view/add.php">Create</a>
<table border="1">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Phone</td>
        <td>Address</td>
        <td>Email</td>
    </tr>

    <?php foreach ($staffs as $key=> $staff): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $staff->getName()?></td>
        <td><?php echo $staff->getPhone()  ?></td>
        <td><?php echo $staff->getAddress()  ?></td>
        <td><?php echo $staff->getEmail()  ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>

