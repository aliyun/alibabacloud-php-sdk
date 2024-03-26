<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models\GetResellerPayOrderResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $buyerId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $payAmount;
    protected $_name = [
        'buyerId'     => 'BuyerId',
        'orderId'     => 'OrderId',
        'orderStatus' => 'OrderStatus',
        'payAmount'   => 'PayAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyerId) {
            $res['BuyerId'] = $this->buyerId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->payAmount) {
            $res['PayAmount'] = $this->payAmount;
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
        if (isset($map['BuyerId'])) {
            $model->buyerId = $map['BuyerId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['PayAmount'])) {
            $model->payAmount = $map['PayAmount'];
        }

        return $model;
    }
}
