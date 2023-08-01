<?php
//curl fetching data 

$api_key = "sk_test_51NZvXiAU78Q91WVcHeYCHMVP6u3spJi2GpIe4bti7G79j2XJlzTRxUVwKNH0GHaGkvIqgf1x0sj0RR5iqsNQpZrP00NEXFhwBk";
 $ch = curl_init();
 
$data = [
    "name" => "Alen",
    "email" => "alen@gmail.com"
];
 
require __DIR__ . "/vendor/autoload.php";

$stripe = new \Stripe\StripeClient($api_key);
$customer = $stripe->customers->create($data);

 echo $customer;

