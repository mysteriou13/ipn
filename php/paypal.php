<?php 
namespace  ipn;

class paypal{

    function __construct(){

        global $wpdb;

        $file =  dirname(__FILE__);

        $pieces = explode("wp-content", $file);
      
        include($pieces[0]."/wp-config.php");
        
        define( 'db_menu', $table_prefix."paypal");

 
        $table = $wpdb->prefix."paypal";

        
        $sql = "
        CREATE TABLE IF NOT EXISTS ".$table." ( 
        `id` INT NOT NULL AUTO_INCREMENT , 
        `item_name` TEXT NOT NULL , 
        `item_number` TEXT NOT NULL ,
        `payment_status` TEXT NOT NULL ,
        `payment_amount` TEXT NOT NULL ,
        `payment_currency` TEXT NOT NULL ,
        `txn_id` TEXT NOT NULL ,
        `receiver_email` TEXT NOT NULL ,

        `payer_email` TEXT NOT NULL ,

         PRIMARY KEY (`id`)) ENGINE = InnoDB; 
        ";

        $this->create_table($sql);   

    }

    function create_table($sql){

        global $wpdb;
    
        $charset_collate = $wpdb->get_charset_collate();
      
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta($sql);
      

    }

}

?>