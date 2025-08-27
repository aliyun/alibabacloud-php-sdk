<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopDetailResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopDetailResponseBody\module\passengerPriceInfoList\priceInfo;

class passengerPriceInfoList extends Model
{
    /**
     * @var int
     */
    public $passengerId;

    /**
     * @var priceInfo
     */
    public $priceInfo;
    protected $_name = [
        'passengerId' => 'passenger_id',
        'priceInfo' => 'price_info',
    ];

    public function validate()
    {
        if (null !== $this->priceInfo) {
            $this->priceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
        }

        if (null !== $this->priceInfo) {
            $res['price_info'] = null !== $this->priceInfo ? $this->priceInfo->toArray($noStream) : $this->priceInfo;
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
        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
        }

        if (isset($map['price_info'])) {
            $model->priceInfo = priceInfo::fromMap($map['price_info']);
        }

        return $model;
    }
}
