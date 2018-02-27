<?php

/**
 * Moka and Contributers licenses this file to you under the MIT license.
 * See the LICENSE file in the project root for more information.
 */
namespace Moka\Helper;

class HashHelper
{    
    public static function hashString($hashStr)
    {
        return hash('sha256', $hashStr);
    }
}
