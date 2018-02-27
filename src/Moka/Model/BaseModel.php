<?php

/**
 * Moka and Contributers licenses this file to you under the MIT license.
 * See the LICENSE file in the project root for more information.
 */
namespace Moka\Model;

use Moka\Options;

class BaseModel
{    
    public $response;
    
    public function isSuccess()
    {
        if($this->response and $this->response->ResultCode == "Success")
        {
            return true;
        }
        
        return false;
    }
    
    public function post($url, $data)
    {
        $post = array(
            'PaymentDealerAuthentication' => array(
                                                'DealerCode'=> Options::getDealerCode(),
                                                'Username' => Options::getUsername(),
                                                'Password' => Options::getPassword(),
                                                'CheckKey'=> Options::getHash()
                                            ),
            'PaymentDealerRequest' => $data
        );
        
        $ch = curl_init($url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_POST, 1); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // SSL sayfa baglantilarinda aktif edilmeli
        $response = curl_exec($ch); 
        curl_close ($ch);
        
        $this->response = $response ? json_decode($response) : NULL;
        
        return $this->response;
    }
}
