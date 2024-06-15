<?php
include_once('in.php');

$select = "SELECT * FROM stdudent";
$sel = mysqli_query($add, $select);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <table border="1">
        <tr>
            <th>Student Name</th>
            <th>Student Father Name</th>
            <th>Student Number</th>
        </tr>
        <?php foreach($sel as $sele) { ?>
            <tr>
                <td><?php echo $sele['std_name']; ?></td>
                <td><?php echo $sele['std_father']; ?></td>
                <td><?php echo $sele['std_number']; ?></td>
            </tr>
        <?php } ?>
    </table>
    </form>
    SELect * from order as o Inner join customer as c On o.customer_id =c.customer_id;
</body>
</html>