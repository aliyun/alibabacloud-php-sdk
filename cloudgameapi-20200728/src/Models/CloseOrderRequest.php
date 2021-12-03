<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class CloseOrderRequest extends Model
{
    /**
     * @var string
     */
    public $accountDomain;

    /**
     * @var string
     */
    public $buyerAccountId;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'accountDomain'  => 'AccountDomain',
        'buyerAccountId' => 'BuyerAccountId',
        'orderId'        => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountDomain) {
            $res['AccountDomain'] = $this->accountDomain;
        }
        if (null !== $this->buyerAccountId) {
            $res['BuyerAccountId'] = $this->buyerAccountId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloseOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountDomain'])) {
            $model->accountDomain = $map['AccountDomain'];
        }
        if (isset($map['BuyerAccountId'])) {
            $model->buyerAccountId = $map['BuyerAccountId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
