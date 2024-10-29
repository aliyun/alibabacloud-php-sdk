<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookResponseBody;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookResponseBody\errorData\orderList;
use AlibabaCloud\Tea\Model;

class errorData extends Model
{
    /**
     * @description order information list. When the same input parameters are used to repeat a Book, if the booking has already been successful, the order number will be returned.
     *
     * @var orderList[]
     */
    public $orderList;
    protected $_name = [
        'orderList' => 'order_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderList) {
            $res['order_list'] = [];
            if (null !== $this->orderList && \is_array($this->orderList)) {
                $n = 0;
                foreach ($this->orderList as $item) {
                    $res['order_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['order_list'])) {
            if (!empty($map['order_list'])) {
                $model->orderList = [];
                $n                = 0;
                foreach ($map['order_list'] as $item) {
                    $model->orderList[$n++] = null !== $item ? orderList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
