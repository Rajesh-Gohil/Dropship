<?php

namespace MageGohil\Checkout\Model;

/*
 * @author     Kristof Ringleff
 * @package    Fooman_Connect
 * @copyright  Copyright (c) 2010 Fooman Limited (http://www.fooman.co.nz)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Status
{
    const NO = '0';
    const YES = '1';
    /**
     * @param bool|false $notSelected
     *
     * @return array
     */
    public static function getStatuses()
    {
        $options = [];
        $options[self::NO] = __('No');
        $options[self::YES] = __('Yes');
       
        return $options;
    }
}
