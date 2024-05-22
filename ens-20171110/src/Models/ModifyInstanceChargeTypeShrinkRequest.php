<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceChargeTypeShrinkRequest extends Model
{
    /**
     * @description Specifies whether to enable auto-payment when you change the billing method from pay-as-you-go to subscription. Valid values:
     *
     * false (default): does not enable auto-payment. The order is generated but not paid.
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable auto-renewal when you change the billing method from pay-as-you-go to subscription. Valid values:
     *
     * false
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description Specifies whether to change the billing method of all data disks that are created with the instance to subscription when you change the billing method of the instance from pay-as-you-go to subscription. Valid values:
     *
     * false (default)
     * @example true
     *
     * @var bool
     */
    public $includeDataDisks;

    /**
     * @description The new billing method. Valid values:
     *
     * This parameter is required.
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The IDs of the instances.
     *
     * This parameter is required.
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @description The subscription duration. This parameter is required if you set the InstanceChargeType parameter to PrePaid. Valid values:
     *
     * If PeriodUnit is Month, Period can be set to 1 to 9 or 12.
     * @example 1
     *
     * @var string
     */
    public $period;

    /**
     * @description The unit of the subscription duration. This parameter is required if you set the InstanceChargeType parameter to PrePaid. Examples:
     *
     * Valid values:
     *
     *   Year
     *   Month
     *   Day
     *
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
