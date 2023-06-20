<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class CreateOrderRequest extends Model
{
    /**
     * @example 2709c68a-d569-4819-9c5d-1222ed2ee924
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $commodity;

    /**
     * @example abc
     *
     * @var string
     */
    public $orderSouce;

    /**
     * @example INSTANCE_BUY
     *
     * @var string
     */
    public $orderType;

    /**
     * @example 111********11
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example HAND
     *
     * @var string
     */
    public $paymentType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'commodity'   => 'Commodity',
        'orderSouce'  => 'OrderSouce',
        'orderType'   => 'OrderType',
        'ownerId'     => 'OwnerId',
        'paymentType' => 'PaymentType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->commodity) {
            $res['Commodity'] = $this->commodity;
        }
        if (null !== $this->orderSouce) {
            $res['OrderSouce'] = $this->orderSouce;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Commodity'])) {
            $model->commodity = $map['Commodity'];
        }
        if (isset($map['OrderSouce'])) {
            $model->orderSouce = $map['OrderSouce'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }

        return $model;
    }
}
