<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CollectFlightLowestPriceRequest\lowestPriceFlightInfoList;

class CollectFlightLowestPriceRequest extends Model
{
    /**
     * @var lowestPriceFlightInfoList[]
     */
    public $lowestPriceFlightInfoList;
    protected $_name = [
        'lowestPriceFlightInfoList' => 'lowest_price_flight_info_list',
    ];

    public function validate()
    {
        if (\is_array($this->lowestPriceFlightInfoList)) {
            Model::validateArray($this->lowestPriceFlightInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lowestPriceFlightInfoList) {
            if (\is_array($this->lowestPriceFlightInfoList)) {
                $res['lowest_price_flight_info_list'] = [];
                $n1 = 0;
                foreach ($this->lowestPriceFlightInfoList as $item1) {
                    $res['lowest_price_flight_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['lowest_price_flight_info_list'])) {
                $model->lowestPriceFlightInfoList = [];
                $n1 = 0;
                foreach ($map['lowest_price_flight_info_list'] as $item1) {
                    $model->lowestPriceFlightInfoList[$n1] = lowestPriceFlightInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
