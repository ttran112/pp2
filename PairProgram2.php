<?php
//Author: Thanh Tran
//Date: jan 15, 2021
//Url:index.php
//Project Title: Pair Program 2

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//include
require('includes/functions.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 2</title>
</head>
<body>
<?php
//print out something
echo "<p>PHP Array Practice</p>";
$number = array(7,9,8,9,8,8,6);

printArray($number);
?>
</body>
</html>
