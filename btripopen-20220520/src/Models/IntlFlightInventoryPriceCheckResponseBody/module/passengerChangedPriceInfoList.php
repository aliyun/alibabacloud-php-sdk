<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckResponseBody\module\passengerChangedPriceInfoList\changedPrice;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckResponseBody\module\passengerChangedPriceInfoList\originalPrice;
use AlibabaCloud\Tea\Model;

class passengerChangedPriceInfoList extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $changed;

    /**
     * @var changedPrice
     */
    public $changedPrice;

    /**
     * @var originalPrice
     */
    public $originalPrice;

    /**
     * @example 0
     *
     * @var int
     */
    public $passengerType;
    protected $_name = [
        'changed'       => 'changed',
        'changedPrice'  => 'changed_price',
        'originalPrice' => 'original_price',
        'passengerType' => 'passenger_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changed) {
            $res['changed'] = $this->changed;
        }
        if (null !== $this->changedPrice) {
            $res['changed_price'] = null !== $this->changedPrice ? $this->changedPrice->toMap() : null;
        }
        if (null !== $this->originalPrice) {
            $res['original_price'] = null !== $this->originalPrice ? $this->originalPrice->toMap() : null;
        }
        if (null !== $this->passengerType) {
            $res['passenger_type'] = $this->passengerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passengerChangedPriceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['changed'])) {
            $model->changed = $map['changed'];
        }
        if (isset($map['changed_price'])) {
            $model->changedPrice = changedPrice::fromMap($map['changed_price']);
        }
        if (isset($map['original_price'])) {
            $model->originalPrice = originalPrice::fromMap($map['original_price']);
        }
        if (isset($map['passenger_type'])) {
            $model->passengerType = $map['passenger_type'];
        }

        return $model;
    }
}
