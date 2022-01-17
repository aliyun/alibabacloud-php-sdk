<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus\productSku;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus\productSku\orderPeriods\orderPeriod;
use AlibabaCloud\Tea\Model;

class orderPeriods extends Model
{
    /**
     * @var orderPeriod[]
     */
    public $orderPeriod;
    protected $_name = [
        'orderPeriod' => 'OrderPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderPeriod) {
            $res['OrderPeriod'] = [];
            if (null !== $this->orderPeriod && \is_array($this->orderPeriod)) {
                $n = 0;
                foreach ($this->orderPeriod as $item) {
                    $res['OrderPeriod'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderPeriods
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderPeriod'])) {
            if (!empty($map['OrderPeriod'])) {
                $model->orderPeriod = [];
                $n                  = 0;
                foreach ($map['OrderPeriod'] as $item) {
                    $model->orderPeriod[$n++] = null !== $item ? orderPeriod::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
