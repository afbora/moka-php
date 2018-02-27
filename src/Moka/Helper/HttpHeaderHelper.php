<?php

/**
 * Moka and Contributers licenses this file to you under the MIT license.
 * See the LICENSE file in the project root for more information.
 */
namespace Moka\Helper;

use Moka\Options;

class HttpHeaderHelper
{
    protected static function checkForOptions()
    {
        $dealerCode = Options::getDealerCode();
        $username   = Options::getUsername();
        $password   = Options::getPassword();
        
        try 
        {
            if(empty($dealerCode) or $dealerCode == "DEALER_CODE") 
            {
                throw new \Exception('Lütfen bayi kodunu giriniz!');
            }
            
            if(empty($username) or $username == "USERNAME") 
            {
                throw new \Exception('Lütfen bayi kullanıcı adınızı giriniz!');
            }
            
            if(empty($password) or $password == "PASSWORD") 
            {
                throw new \Exception('Lütfen bayi şifrenizi giriniz!');
            }
        } 
        catch (\Exception $e) 
        {
            exit("Bir hata meydana geldi: " .$e->getMessage(). "\n");
        }        
    }
    
    public static function getDefault()
    {
        $checkForOptions = self::checkForOptions();
        
        $header = array(
            "Accept: application/json",
            "Content-Type: application/json"
        );
        
        return $header;
    }
}
