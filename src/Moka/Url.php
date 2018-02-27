<?php

/**
 * Moka and Contributers licenses this file to you under the MIT license.
 * See the LICENSE file in the project root for more information.
 */
namespace Moka;

class Url
{    
    const PROD_URL = 'https://service.moka.com';
    const TEST_URL = 'https://service.testmoka.com';
    
    const PAYMENT_URL = '/PaymentDealer/DoDirectPayment';
    const PAYMENT_THREEDSECURE_URL = '/PaymentDealer/DoDirectPaymentThreeD';
    
    public static function getPayment()
    {
        return self::convert(self::PAYMENT_URL);
    }
    
    public static function getThreeDSecurePayment()
    {
        return self::convert(self::PAYMENT_THREEDSECURE_URL);
    }
    
    private static function convert($url)
    {
        return(Options::getTestMode() ? self::TEST_URL : self::PROD_URL) . $url;
    }
}
