<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseResponseBody;

use AlibabaCloud\Tea\Model;

class orderList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseResponseBody\orderList\orderList[]
     */
    public $orderList;
    protected $_name = [
        'orderList' => 'OrderList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderList) {
            $res['OrderList'] = [];
            if (null !== $this->orderList && \is_array($this->orderList)) {
                $n = 0;
                foreach ($this->orderList as $item) {
                    $res['OrderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderList'])) {
            if (!empty($map['OrderList'])) {
                $model->orderList = [];
                $n                = 0;
                foreach ($map['OrderList'] as $item) {
                    $model->orderList[$n++] = null !== $item ? \AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseResponseBody\orderList\orderList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
