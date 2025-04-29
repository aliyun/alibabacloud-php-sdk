<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealOrderListQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealOrderListQueryResponseBody\module\orderList;

class module extends Model
{
    /**
     * @var orderList[]
     */
    public $orderList;
    protected $_name = [
        'orderList' => 'order_list',
    ];

    public function validate()
    {
        if (\is_array($this->orderList)) {
            Model::validateArray($this->orderList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderList) {
            if (\is_array($this->orderList)) {
                $res['order_list'] = [];
                $n1 = 0;
                foreach ($this->orderList as $item1) {
                    $res['order_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['order_list'])) {
            if (!empty($map['order_list'])) {
                $model->orderList = [];
                $n1 = 0;
                foreach ($map['order_list'] as $item1) {
                    $model->orderList[$n1++] = orderList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
