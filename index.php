<?php 
session_start();

require_once("connection.php");

$_SESSION['pseudo'] = "pseudotest";

$value = "8.00";

$number = "5";

$item_name = "test";

$email_business = "tonymassa-facilitator@free.fr";

$mysqli = new mysqli('localhost', $user, $password, $database);

$sql = "SELECT * FROM `wor1848_panier` WHERE pseudo = 'logintest' " ;

$result = $mysqli->query($sql);

 $r = mysqli_fetch_all($result, MYSQLI_ASSOC);

 $nb = count($r)-1;

 $tab = array();

 $prix = array();

 echo "<table>";

 for($a = 0; $a <= $nb; $a++){

$o = $r[$a]['pseudo']."/".$r[$a]['item_name']."/".$r[$a]['item_number']."/".$r[$a]['prix'];


 array_push($prix,$r[$a]['item_number']*$r[$a]['prix']);

echo "<tr>";

echo "<td> nom  : </td>";

echo "<td>";
echo $r[$a]['item_name'];
echo "</td>

</tr>";

echo "<tr>";

echo "<td> nombre : </td> <td>
";
echo $r[$a]['item_number'];

echo "</td> </tr>";

echo "<tr>  <td> prix : </td> <td>";


echo $r[$a]['prix'];

echo "</td>

   </tr>";

 }

echo "</table>";

$total =  array_sum($prix);


?>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="<?php echo $email_business?>">
    <input type="hidden" name="item_name" value="<?php echo $item_name;?>">
    <input type="hidden" name="item_number" value="<?php echo $number;?>">
    <input type="hidden" name="amount" value="<?php echo $total;?>">
    <input type="hidden" name="shipping" value="2">
    <input type="hidden" name="no_note" value="1">
    <input type="hidden" name="currency_code" value="EUR">
    <input type="hidden" name="lc" value="AU">
    <input type="hidden" name="bn" value="PP-BuyNowBF">
  <input type="hidden" name="hosted_button_id" value="6RNT8A4HBBJRE">

  <div>

  <div>
    
   </div>

   <div>
 
   total <?php echo $total." &nbsp;EUR"?>
    </div>


  </div>

  <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_buynow_107x26.png" alt="Buy Now">
  <img alt="" src="https://paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

