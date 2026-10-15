<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponseBody\data;

use AlibabaCloud\Dara\Model;

class paymentScheme extends Model
{
    /**
     * @var string
     */
    public $orderDownPaymentFee;

    /**
     * @var string
     */
    public $orderDownPaymentSettleFee;

    /**
     * @var string
     */
    public $orderTotalFee;

    /**
     * @var string
     */
    public $orderTotalSettleFee;

    /**
     * @var string
     */
    public $paymentType;
    protected $_name = [
        'orderDownPaymentFee' => 'OrderDownPaymentFee',
        'orderDownPaymentSettleFee' => 'OrderDownPaymentSettleFee',
        'orderTotalFee' => 'OrderTotalFee',
        'orderTotalSettleFee' => 'OrderTotalSettleFee',
        'paymentType' => 'PaymentType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderDownPaymentFee) {
            $res['OrderDownPaymentFee'] = $this->orderDownPaymentFee;
        }

        if (null !== $this->orderDownPaymentSettleFee) {
            $res['OrderDownPaymentSettleFee'] = $this->orderDownPaymentSettleFee;
        }

        if (null !== $this->orderTotalFee) {
            $res['OrderTotalFee'] = $this->orderTotalFee;
        }

        if (null !== $this->orderTotalSettleFee) {
            $res['OrderTotalSettleFee'] = $this->orderTotalSettleFee;
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
        if (isset($map['OrderDownPaymentFee'])) {
            $model->orderDownPaymentFee = $map['OrderDownPaymentFee'];
        }

        if (isset($map['OrderDownPaymentSettleFee'])) {
            $model->orderDownPaymentSettleFee = $map['OrderDownPaymentSettleFee'];
        }

        if (isset($map['OrderTotalFee'])) {
            $model->orderTotalFee = $map['OrderTotalFee'];
        }

        if (isset($map['OrderTotalSettleFee'])) {
            $model->orderTotalSettleFee = $map['OrderTotalSettleFee'];
        }

        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }

        return $model;
    }
}
