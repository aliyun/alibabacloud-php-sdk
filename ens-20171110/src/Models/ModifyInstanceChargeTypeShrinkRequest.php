<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceChargeTypeShrinkRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @example true
     *
     * @var bool
     */
    public $includeDataDisks;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @example 1
     *
     * @var string
     */
    public $period;

    /**
     * @example Month
     *
     * @var string
     */
    public $periodUnit;
    protected $_name = [
        'autoPay'            => 'AutoPay',
        'autoRenew'          => 'AutoRenew',
        'includeDataDisks'   => 'IncludeDataDisks',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceIdsShrink'  => 'InstanceIds',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
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

    /**
     * @param array $map
     *
     * @return ModifyInstanceChargeTypeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
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
