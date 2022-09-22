<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservationDemandsResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservationDemandsResponseBody\data\demandOrders;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var demandOrders[]
     */
    public $demandOrders;
    protected $_name = [
        'demandOrders' => 'DemandOrders',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->demandOrders) {
            $res['DemandOrders'] = [];
            if (null !== $this->demandOrders && \is_array($this->demandOrders)) {
                $n = 0;
                foreach ($this->demandOrders as $item) {
                    $res['DemandOrders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DemandOrders'])) {
            if (!empty($map['DemandOrders'])) {
                $model->demandOrders = [];
                $n                   = 0;
                foreach ($map['DemandOrders'] as $item) {
                    $model->demandOrders[$n++] = null !== $item ? demandOrders::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
