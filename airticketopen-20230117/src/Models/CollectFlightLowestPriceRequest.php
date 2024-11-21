<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CollectFlightLowestPriceRequest\lowestPriceFlightInfoList;
use AlibabaCloud\Tea\Model;

class CollectFlightLowestPriceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var lowestPriceFlightInfoList[]
     */
    public $lowestPriceFlightInfoList;
    protected $_name = [
        'lowestPriceFlightInfoList' => 'lowest_price_flight_info_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lowestPriceFlightInfoList) {
            $res['lowest_price_flight_info_list'] = [];
            if (null !== $this->lowestPriceFlightInfoList && \is_array($this->lowestPriceFlightInfoList)) {
                $n = 0;
                foreach ($this->lowestPriceFlightInfoList as $item) {
                    $res['lowest_price_flight_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CollectFlightLowestPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['lowest_price_flight_info_list'])) {
            if (!empty($map['lowest_price_flight_info_list'])) {
                $model->lowestPriceFlightInfoList = [];
                $n                                = 0;
                foreach ($map['lowest_price_flight_info_list'] as $item) {
                    $model->lowestPriceFlightInfoList[$n++] = null !== $item ? lowestPriceFlightInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
