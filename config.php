<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_TKRRL5YgeGCBAbvfTamT56Qq",
  "publishable_key" => "pk_test_Yt2PrGk0plnAOcyGycioS6SI"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
