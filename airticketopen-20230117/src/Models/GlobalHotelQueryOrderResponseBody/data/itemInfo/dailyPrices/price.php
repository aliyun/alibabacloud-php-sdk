<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\itemInfo\dailyPrices;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\itemInfo\dailyPrices\price\currency;

class price extends Model
{
    /**
     * @var int
     */
    public $cent;

    /**
     * @var currency
     */
    public $currency;
    protected $_name = [
        'cent' => 'Cent',
        'currency' => 'Currency',
    ];

    public function validate()
    {
        if (null !== $this->currency) {
            $this->currency->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cent) {
            $res['Cent'] = $this->cent;
        }

        if (null !== $this->currency) {
            $res['Currency'] = null !== $this->currency ? $this->currency->toArray($noStream) : $this->currency;
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
        if (isset($map['Cent'])) {
            $model->cent = $map['Cent'];
        }

        if (isset($map['Currency'])) {
            $model->currency = currency::fromMap($map['Currency']);
        }

        return $model;
    }
}
