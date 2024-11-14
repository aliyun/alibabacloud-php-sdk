<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CollectFlightLowestPriceRequest\lowestPriceFlightList;
use AlibabaCloud\Tea\Model;

class CollectFlightLowestPriceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var lowestPriceFlightList[]
     */
    public $lowestPriceFlightList;
    protected $_name = [
        'lowestPriceFlightList' => 'lowestPriceFlightList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lowestPriceFlightList) {
            $res['lowestPriceFlightList'] = [];
            if (null !== $this->lowestPriceFlightList && \is_array($this->lowestPriceFlightList)) {
                $n = 0;
                foreach ($this->lowestPriceFlightList as $item) {
                    $res['lowestPriceFlightList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['lowestPriceFlightList'])) {
            if (!empty($map['lowestPriceFlightList'])) {
                $model->lowestPriceFlightList = [];
                $n                            = 0;
                foreach ($map['lowestPriceFlightList'] as $item) {
                    $model->lowestPriceFlightList[$n++] = null !== $item ? lowestPriceFlightList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
