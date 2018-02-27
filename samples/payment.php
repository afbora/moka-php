<?php

require_once('config.php');

$InstallmentNumber = 0;
$OtherTrxCode = uniqid();
$SubMerchantName = "";
    
$payment = array(
    "CardHolderFullName" => "John Doe",
    "CardNumber" => "5269552233334444",
    "ExpMonth" => 12,
    "ExpYear" => 2018,
    "CvcNumber" => 123,
    "Amount" => 0.1,
    "Currency" => "TL",
    "InstallmentNumber" => $InstallmentNumber,
    "ClientIP" => $_SERVER['REMOTE_ADDR'],
    "OtherTrxCode" => $OtherTrxCode,
    "SubMerchantName" => $SubMerchantName
);   

$request = new \Moka\Model\Payment();   
$result = $request->create($payment);

var_dump($result);