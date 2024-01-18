<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyResponseBody;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyResponseBody\data\changeOrders;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var changeOrders[]
     */
    public $changeOrders;

    /**
     * @example 4988430***950
     *
     * @var int
     */
    public $orderNum;
    protected $_name = [
        'changeOrders' => 'change_orders',
        'orderNum'     => 'order_num',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrders) {
            $res['change_orders'] = [];
            if (null !== $this->changeOrders && \is_array($this->changeOrders)) {
                $n = 0;
                foreach ($this->changeOrders as $item) {
                    $res['change_orders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
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
        if (isset($map['change_orders'])) {
            if (!empty($map['change_orders'])) {
                $model->changeOrders = [];
                $n                   = 0;
                foreach ($map['change_orders'] as $item) {
                    $model->changeOrders[$n++] = null !== $item ? changeOrders::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }

        return $model;
    }
}
