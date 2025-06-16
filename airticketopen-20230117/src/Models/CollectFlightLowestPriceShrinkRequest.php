<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class CollectFlightLowestPriceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $lowestPriceFlightInfoListShrink;
    protected $_name = [
        'lowestPriceFlightInfoListShrink' => 'lowest_price_flight_info_list',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lowestPriceFlightInfoListShrink) {
            $res['lowest_price_flight_info_list'] = $this->lowestPriceFlightInfoListShrink;
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
        if (isset($map['lowest_price_flight_info_list'])) {
            $model->lowestPriceFlightInfoListShrink = $map['lowest_price_flight_info_list'];
        }

        return $model;
    }
}
