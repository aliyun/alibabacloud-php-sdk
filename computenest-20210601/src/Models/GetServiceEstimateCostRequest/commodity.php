<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceEstimateCostRequest;

use AlibabaCloud\Tea\Model;

class commodity extends Model
{
    /**
     * @description 优惠券ID
     *
     * @example 302070970220
     *
     * @var string
     */
    public $couponId;

    /**
     * @description The subscription duration.
     *
     * @example 1
     *
     * @var int
     */
    public $payPeriod;

    /**
     * @description The unit of the subscription duration. Valid values:
     *
     *   Year
     *   Month
     *   Day
     *
     * @example Year
     *
     * @var string
     */
    public $payPeriodUnit;
    protected $_name = [
        'couponId' => 'CouponId',
        'payPeriod' => 'PayPeriod',
        'payPeriodUnit' => 'PayPeriodUnit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->couponId) {
            $res['CouponId'] = $this->couponId;
        }
        if (null !== $this->payPeriod) {
            $res['PayPeriod'] = $this->payPeriod;
        }
        if (null !== $this->payPeriodUnit) {
            $res['PayPeriodUnit'] = $this->payPeriodUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CouponId'])) {
            $model->couponId = $map['CouponId'];
        }
        if (isset($map['PayPeriod'])) {
            $model->payPeriod = $map['PayPeriod'];
        }
        if (isset($map['PayPeriodUnit'])) {
            $model->payPeriodUnit = $map['PayPeriodUnit'];
        }

        return $model;
    }
}
