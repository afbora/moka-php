<?php

require_once('config.php');

$OtherTrxCode = uniqid();
    
$payment = array(
    "VirtualPosOrderId" => 'Test-b4bba034-0374-43c3-b4e0-222dc4adbd11',
    "OtherTrxCode" => $OtherTrxCode,
    "Amount" => 0
);   

$request = new \Moka\Model\Refund();   
$result = $request->create($payment);

var_dump($result);