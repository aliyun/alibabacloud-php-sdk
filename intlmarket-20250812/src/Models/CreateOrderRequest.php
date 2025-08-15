<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntlMarket\V20250812\Models;

use AlibabaCloud\Dara\Model;

class CreateOrderRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $commodity;

    /**
     * @var string
     */
    public $orderSouce;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $paymentType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'commodity' => 'Commodity',
        'orderSouce' => 'OrderSouce',
        'orderType' => 'OrderType',
        'ownerId' => 'OwnerId',
        'paymentType' => 'PaymentType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
