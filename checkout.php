<?php
session_start();
//connect to database
include 'partials/_dbconnect.php';


$order=$_SESSION['Order'];
$amount=$_SESSION['amount'];
$userId= $_SESSION['user_id'];


$oid = mt_rand(10000, 99999);
$_SESSION['orderid'] = str_pad($oid, 5, '0', STR_PAD_LEFT);

foreach ($order as $item) {
    echo $item . "<br>";
}
echo $amount."<br>" ;

echo( $_SESSION['rest_id'])."<br>" ;
echo $userId."<br>" ;

echo $oid;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // $_SESSION['Billing_address'] = $_POST['address'];
    //$_SESSION['Billing_phone'] = $_POST['phone'];
    header('pay.php');
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout Form</title>
</head>
<body>
    <h1>Checkout Form</h1>
    <form action="pay.php" method="post">

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea><br>

        <label for="phone">phone</label>
        <input type="tel" id="phone" name="phone" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
