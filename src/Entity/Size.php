<?php

/**
 * This file is part of the DigitalOceanV2 library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DigitalOceanV2\Entity;

/**
 * @author Yassir Hannoun <yassir.hannoun@gmail.com>
 */
class Size extends AbstractEntity
{
    /**
     * @var string
     */
    public $slug;

    /**
     * @var integer
     */
    public $memory;

    /**
     * @var integer
     */
    public $vcpus;

    /**
     * @var integer
     */
    public $disk;

    /**
     * @var integer
     */
    public $transfer;

    /**
     * @var string
     */
    public $priceMonthly;

    /**
     * @var string
     */
    public $priceHourly;

    /**
     * @var string[]
     */
    public $regions;
}
