<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceEstimateCostRequest;

use AlibabaCloud\Tea\Model;

class commodity extends Model
{
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
     * @example Month
     *
     * @var string
     */
    public $payPeriodUnit;
    protected $_name = [
        'payPeriod'     => 'PayPeriod',
        'payPeriodUnit' => 'PayPeriodUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['PayPeriod'])) {
            $model->payPeriod = $map['PayPeriod'];
        }
        if (isset($map['PayPeriodUnit'])) {
            $model->payPeriodUnit = $map['PayPeriodUnit'];
        }

        return $model;
    }
}
