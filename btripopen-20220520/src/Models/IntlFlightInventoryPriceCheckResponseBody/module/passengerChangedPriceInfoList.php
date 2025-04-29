<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckResponseBody\module\passengerChangedPriceInfoList\changedPrice;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckResponseBody\module\passengerChangedPriceInfoList\originalPrice;

class passengerChangedPriceInfoList extends Model
{
    /**
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
     * @var int
     */
    public $passengerType;
    protected $_name = [
        'changed' => 'changed',
        'changedPrice' => 'changed_price',
        'originalPrice' => 'original_price',
        'passengerType' => 'passenger_type',
    ];

    public function validate()
    {
        if (null !== $this->changedPrice) {
            $this->changedPrice->validate();
        }
        if (null !== $this->originalPrice) {
            $this->originalPrice->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changed) {
            $res['changed'] = $this->changed;
        }

        if (null !== $this->changedPrice) {
            $res['changed_price'] = null !== $this->changedPrice ? $this->changedPrice->toArray($noStream) : $this->changedPrice;
        }

        if (null !== $this->originalPrice) {
            $res['original_price'] = null !== $this->originalPrice ? $this->originalPrice->toArray($noStream) : $this->originalPrice;
        }

        if (null !== $this->passengerType) {
            $res['passenger_type'] = $this->passengerType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
