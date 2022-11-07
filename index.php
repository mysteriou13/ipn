<?php 

require_once(dirname(__FILE__)."/php/paypal.php");

$pay = new \ipn\paypal();

global $wpdb;

$table = $wpdb->prefix.'paypal';

$data = array('item_name' => 'data one', 
'item_number' => "ff", 
"payment_status" => "eee", 
"payment_amount" => "textpayment_amount",
"payment_currency" => 'testpayment_currency',
 "txn_id" => "txn_id",
 "receiver_email" => "testreceiver_email",
  "payer_email" => "testemail");

$pay->insert_data($data);
  
?>