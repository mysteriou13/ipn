<?php 
session_start();


require_once("connection.php");

$dsn = 'mysql:dbname='.$database.';host=127.0.0.1';


$dbh = new PDO('mysql:host=localhost;dbname='.$database.'', $user, $password);

$item_name = $_POST['item_name'];

$item_number = $_POST['item_number'];

$item_pseudo = $_SESSION['pseudo'];


$payment_status = $_POST['payment_status'];
$payment_amount = $_POST['mc_gross'];
$payment_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];
$receiver_email = $_POST['receiver_email'];
$payer_email = $_POST['payer_email'];

$sql  ="INSERT INTO `wor1848_paypal` (`id`,  `item_name`, `item_pseudo`, `item_number`, `payment_status`, `payment_amount`, `payment_currency`, `txn_id`, `receiver_email`, `payer_email`) 

VALUES (NULL, '$item_name', '$item_pseudo', '$item_number', '$payment_status', '$payment_amount', '$payement_current', '$txn_id', '$receiver_email', '$payer_email')";

$stmt= $dbh->prepare($sql);


$stmt->execute($data);

?>