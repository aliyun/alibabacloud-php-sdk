<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealOrderListQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class orderList extends Model
{
    /**
     * @var int
     */
    public $corpPayAmount;

    /**
     * @var string
     */
    public $merchantName;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var int
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $payAmount;

    /**
     * @var int
     */
    public $personPayAmount;

    /**
     * @var string
     */
    public $settleTime;
    protected $_name = [
        'corpPayAmount' => 'corp_pay_amount',
        'merchantName' => 'merchant_name',
        'orderId' => 'order_id',
        'orderStatus' => 'order_status',
        'orderType' => 'order_type',
        'payAmount' => 'pay_amount',
        'personPayAmount' => 'person_pay_amount',
        'settleTime' => 'settle_time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpPayAmount) {
            $res['corp_pay_amount'] = $this->corpPayAmount;
        }

        if (null !== $this->merchantName) {
            $res['merchant_name'] = $this->merchantName;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
        }

        if (null !== $this->orderType) {
            $res['order_type'] = $this->orderType;
        }

        if (null !== $this->payAmount) {
            $res['pay_amount'] = $this->payAmount;
        }

        if (null !== $this->personPayAmount) {
            $res['person_pay_amount'] = $this->personPayAmount;
        }

        if (null !== $this->settleTime) {
            $res['settle_time'] = $this->settleTime;
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
        if (isset($map['corp_pay_amount'])) {
            $model->corpPayAmount = $map['corp_pay_amount'];
        }

        if (isset($map['merchant_name'])) {
            $model->merchantName = $map['merchant_name'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['order_status'])) {
            $model->orderStatus = $map['order_status'];
        }

        if (isset($map['order_type'])) {
            $model->orderType = $map['order_type'];
        }

        if (isset($map['pay_amount'])) {
            $model->payAmount = $map['pay_amount'];
        }

        if (isset($map['person_pay_amount'])) {
            $model->personPayAmount = $map['person_pay_amount'];
        }

        if (isset($map['settle_time'])) {
            $model->settleTime = $map['settle_time'];
        }

        return $model;
    }
}
