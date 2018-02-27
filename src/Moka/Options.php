<?php

/**
 * Moka and Contributers licenses this file to you under the MIT license.
 * See the LICENSE file in the project root for more information.
 */
namespace Moka;

use Moka\Helper\HashHelper;

class Options
{
    private static $version = "1.0";
    private static $dealerCode;
    private static $username;
    private static $password;
    private static $hash;
    private static $testMode = false;
    
    public function __construct($dealerCode = null, $username = null, $password = null, $testMode = false)
    {
        if($dealerCode) 
		{
            self::setDealerCode($dealerCode);
        }
        
        if($username) 
		{
            self::setUsername($username);
        }
        
        if($password) 
		{
            self::setPassword($password);
        }
        
        self::setTestMode($testMode);
    }
    
    public static function getVersion()
    {
        return self::$version;
    }
    
    public static function getHashVersion()
    {
        return self::$hashVersion;
    }

    public static function getDealerCode()
    {
        return self::$dealerCode;
    }

    public static function setDealerCode($dealerCode)
    {
        self::$dealerCode = $dealerCode;
    }

    public static function getUsername()
    {
        return self::$username;
    }

    public static function setUsername($username)
    {
        self::$username = $username;
    }

    public static function getPassword()
    {
        return self::$password;
    }

    public static function setPassword($password)
    {
        self::$password = $password;
    }
    
    public static function getHash()
    {
        if(empty(self::$hash)) 
        {
            self::setHash();
        }
        
        return self::$hash;
    }
    
    public static function setHash($hash = null)
    {
        return self::$hash = ($hash ? $hash : (HashHelper::hashString(self::toString())));
    }

    public static function getTestMode()
    {
        return self::$testMode;
    }

    public static function setTestMode($testMode = true)
    {
        self::$testMode = filter_var($testMode, FILTER_VALIDATE_BOOLEAN);
    }
    
    public static function toString()
    {        
        return implode('', array(
                    self::getDealerCode(),
                    "MK",
                    self::getUsername(),
                    "PD",
                    self::getPassword()
                ));
    }
}
