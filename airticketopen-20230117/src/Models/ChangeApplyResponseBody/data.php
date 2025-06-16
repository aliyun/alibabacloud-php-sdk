<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyResponseBody\data\changeOrders;

class data extends Model
{
    /**
     * @var changeOrders[]
     */
    public $changeOrders;

    /**
     * @var int
     */
    public $orderNum;
    protected $_name = [
        'changeOrders' => 'change_orders',
        'orderNum' => 'order_num',
    ];

    public function validate()
    {
        if (\is_array($this->changeOrders)) {
            Model::validateArray($this->changeOrders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeOrders) {
            if (\is_array($this->changeOrders)) {
                $res['change_orders'] = [];
                $n1 = 0;
                foreach ($this->changeOrders as $item1) {
                    $res['change_orders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
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
        if (isset($map['change_orders'])) {
            if (!empty($map['change_orders'])) {
                $model->changeOrders = [];
                $n1 = 0;
                foreach ($map['change_orders'] as $item1) {
                    $model->changeOrders[$n1] = changeOrders::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }

        return $model;
    }
}
