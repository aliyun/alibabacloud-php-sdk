<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceEstimateCostRequest;

use AlibabaCloud\Dara\Model;

class commodity extends Model
{
    /**
     * @var int
     */
    public $payPeriod;
    /**
     * @var string
     */
    public $payPeriodUnit;
    protected $_name = [
        'payPeriod'     => 'PayPeriod',
        'payPeriodUnit' => 'PayPeriodUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
