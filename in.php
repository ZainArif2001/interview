<?php
define("ZAIN", "hello zain");
echo ZAIN;

function check() {
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "oop";

    $add = mysqli_connect($server, $user, $password, $dbname);
    if ($add) {
        echo "Database is connected";
    } else {
        echo "Database connection failed: " . mysqli_connect_error();
    }
    return $add;
}

$add = check();

if (isset($_POST['btn_add'])) {
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $number = $_POST['number'];

    $insert = "INSERT INTO stdudent(std_name, std_father, std_number) VALUES ('$name', '$fname', '$number')";

    $database = mysqli_query($add, $insert);

    if ($database) {
        echo "Student added successfully";
    } else {
        echo "Student not added: " . mysqli_error($add);
    }
}

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
        <input type="text" name="name" placeholder="Enter Your Name">
        <input type="text" name="fname" placeholder="Enter Your Father Name">
        <input type="text" name="number" placeholder="Enter Your Number">
        <button type="submit" name="btn_add">Add</button>
    </form>

   
</body>
</html>
