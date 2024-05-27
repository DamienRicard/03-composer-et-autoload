<?php 

use Class\Stripe\Payment as PaymentStripe;
use Class\Paypal\Payment as PaymentPaypal;
use Colors\RandomColor;

// require_once ('./Class/Stripe/Payment.php');
// require_once ('./Class/Paypal/Payment.php');
// require_once ('./Class/Users/User.php');

//mise en place de l'autoload de php
// spl_autoload_register(function($class){
//   $path = dirname(__DIR__) . '/' . str_replace('\\','/',$class) . '.php';

//   if(file_exists($path)){
//     require $path;
//   }
// });

require_once ('../vendor/autoload.php');
$paymentStripe = new PaymentStripe();
$paymentPaypal = new PaymentPaypal();
var_dump(RandomColor::one());

var_dump($paymentStripe, $paymentPaypal);