<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseResponseBody\orderList\orderList;

class orderList extends Model
{
    /**
     * @var orderList[]
     */
    public $orderList;
    protected $_name = [
        'orderList' => 'OrderList',
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
                $res['OrderList'] = [];
                $n1 = 0;
                foreach ($this->orderList as $item1) {
                    $res['OrderList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OrderList'])) {
            if (!empty($map['OrderList'])) {
                $model->orderList = [];
                $n1 = 0;
                foreach ($map['OrderList'] as $item1) {
                    $model->orderList[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
