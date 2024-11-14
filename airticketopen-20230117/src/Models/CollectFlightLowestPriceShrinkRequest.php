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
    public $lowestPriceFlightListShrink;
    protected $_name = [
        'lowestPriceFlightListShrink' => 'lowestPriceFlightList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lowestPriceFlightListShrink) {
            $res['lowestPriceFlightList'] = $this->lowestPriceFlightListShrink;
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
        if (isset($map['lowestPriceFlightList'])) {
            $model->lowestPriceFlightListShrink = $map['lowestPriceFlightList'];
        }

        return $model;
    }
}
