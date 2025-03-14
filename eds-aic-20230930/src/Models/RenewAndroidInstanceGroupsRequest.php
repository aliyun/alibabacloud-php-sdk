<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class RenewAndroidInstanceGroupsRequest extends Model
{
    /**
     * @description Specifies whether to enable the auto-payment feature.
     *
     * Valid values:
     *
     *   true: enables the auto-payment feature. Ensure your account has sufficient balance to use this feature.
     *   false: disables the auto-payment feature. You need to manually complete the payment process.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The IDs of the instance groups.
     *
     * @var string[]
     */
    public $instanceGroupIds;

    /**
     * @description The duration of the renewal, measured in units defined by PeriodUnit.
     *
     * @example 6
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the renewal duration. Default value: Month.
     *
     * Valid values:
     *
     *   Month
     *   Year
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'instanceGroupIds' => 'InstanceGroupIds',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->instanceGroupIds) {
            $res['InstanceGroupIds'] = $this->instanceGroupIds;
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
     * @return RenewAndroidInstanceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['InstanceGroupIds'])) {
            if (!empty($map['InstanceGroupIds'])) {
                $model->instanceGroupIds = $map['InstanceGroupIds'];
            }
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
