<?php

/*
 * This file is part of ibrand/EC-Open-Server.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\EC\Open\Server\Http\Controllers;

use iBrand\Component\Shipping\Models\ShippingMethod;

class ShippingController extends Controller
{
    public function getMethods()
    {
        return $this->success(ShippingMethod::all());
    }
}
