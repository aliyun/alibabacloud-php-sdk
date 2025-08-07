<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceRequest;

use AlibabaCloud\Dara\Model;

class commodity extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $couponId;

    /**
     * @var int
     */
    public $payPeriod;

    /**
     * @var string
     */
    public $payPeriodUnit;

    /**
     * @var string
     */
    public $quotationId;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'couponId' => 'CouponId',
        'payPeriod' => 'PayPeriod',
        'payPeriodUnit' => 'PayPeriodUnit',
        'quotationId' => 'QuotationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->couponId) {
            $res['CouponId'] = $this->couponId;
        }

        if (null !== $this->payPeriod) {
            $res['PayPeriod'] = $this->payPeriod;
        }

        if (null !== $this->payPeriodUnit) {
            $res['PayPeriodUnit'] = $this->payPeriodUnit;
        }

        if (null !== $this->quotationId) {
            $res['QuotationId'] = $this->quotationId;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['CouponId'])) {
            $model->couponId = $map['CouponId'];
        }

        if (isset($map['PayPeriod'])) {
            $model->payPeriod = $map['PayPeriod'];
        }

        if (isset($map['PayPeriodUnit'])) {
            $model->payPeriodUnit = $map['PayPeriodUnit'];
        }

        if (isset($map['QuotationId'])) {
            $model->quotationId = $map['QuotationId'];
        }

        return $model;
    }
}
