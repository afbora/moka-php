<?php

/**
 * Moka and Contributers licenses this file to you under the MIT license.
 * See the LICENSE file in the project root for more information.
 */
namespace Moka\Model;

use Moka\Url;

class Refund extends BaseModel
{    
    public function create($data)
    {        
        return $this->post(Url::getRefund(), $data);
    }
}
