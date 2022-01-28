<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateDiskBuyOrderRequest extends Model
{
    /**
     * @description 创建订单的订单详情
     *
     * @var string
     */
    public $orderDetails;
    protected $_name = [
        'orderDetails' => 'OrderDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderDetails) {
            $res['OrderDetails'] = $this->orderDetails;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiskBuyOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderDetails'])) {
            $model->orderDetails = $map['OrderDetails'];
        }

        return $model;
    }
}
