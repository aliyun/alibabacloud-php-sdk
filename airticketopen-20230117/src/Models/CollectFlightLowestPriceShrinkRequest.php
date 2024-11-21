<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Tea\Model;

class CollectFlightLowestPriceShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $lowestPriceFlightInfoListShrink;
    protected $_name = [
        'lowestPriceFlightInfoListShrink' => 'lowest_price_flight_info_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lowestPriceFlightInfoListShrink) {
            $res['lowest_price_flight_info_list'] = $this->lowestPriceFlightInfoListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CollectFlightLowestPriceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['lowest_price_flight_info_list'])) {
            $model->lowestPriceFlightInfoListShrink = $map['lowest_price_flight_info_list'];
        }

        return $model;
    }
}
