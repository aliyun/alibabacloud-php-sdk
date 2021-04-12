<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class DeliveryOrderRequest extends Model
{
    /**
     * @var string
     */
    public $buyerAccountId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $accountDomain;
    protected $_name = [
        'buyerAccountId' => 'BuyerAccountId',
        'orderId'        => 'OrderId',
        'accountDomain'  => 'AccountDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyerAccountId) {
            $res['BuyerAccountId'] = $this->buyerAccountId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->accountDomain) {
            $res['AccountDomain'] = $this->accountDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeliveryOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyerAccountId'])) {
            $model->buyerAccountId = $map['BuyerAccountId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['AccountDomain'])) {
            $model->accountDomain = $map['AccountDomain'];
        }

        return $model;
    }
}
