<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstancePriceResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstancePriceResponseBody\priceInfo\order;
use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    /**
     * @var order
     */
    public $order;
    protected $_name = [
        'order' => 'Order',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = null !== $this->order ? $this->order->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Order'])) {
            $model->order = order::fromMap($map['Order']);
        }

        return $model;
    }
}
