<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceChargeTypeShrinkRequest extends Model
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
    public $billingCycle;

    /**
     * @var bool
     */
    public $includeDataDisks;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'billingCycle' => 'BillingCycle',
        'includeDataDisks' => 'IncludeDataDisks',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceIdsShrink' => 'InstanceIds',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
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

        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }

        if (null !== $this->includeDataDisks) {
            $res['IncludeDataDisks'] = $this->includeDataDisks;
        }

        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }

        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
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

        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }

        if (isset($map['IncludeDataDisks'])) {
            $model->includeDataDisks = $map['IncludeDataDisks'];
        }

        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        return $model;
    }
}
