<?php 

$value = "8.00";

$number = "5";

$item_name = "test";

$email_business = "tonymassa-facilitator@free.fr";

?>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="<?php echo $email_business?>">
    <input type="hidden" name="item_name" value="<?php echo $item_name;?>">
    <input type="hidden" name="item_number" value="<?php echo $number;?>">
    <input type="hidden" name="amount" value="<?php echo $value;?>">
    <input type="hidden" name="shipping" value="2">
    <input type="hidden" name="no_note" value="1">
    <input type="hidden" name="currency_code" value="EUR">
    <input type="hidden" name="lc" value="AU">
    <input type="hidden" name="bn" value="PP-BuyNowBF">
  <input type="hidden" name="hosted_button_id" value="6RNT8A4HBBJRE">

   <div>

   total <?php echo $value." &nbsp;EUR"?>
    </div>

  <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_buynow_107x26.png" alt="Buy Now">
  <img alt="" src="https://paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>



     