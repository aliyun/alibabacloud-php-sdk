<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RenewARMServerInstanceRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The ID of the instance that you want to renew.
     *
     * This parameter is required.
     * @example yourInstance ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The renewal period. By default, instances are renewed on a monthly basis. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, and 12.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the renewal period. Valid values:
     *
     *   Month (default)
     *   Year
     *
     * This parameter is required.
     * @example Month
     *
     * @var string
     */
    public $periodUnit;
    protected $_name = [
        'autoRenew'  => 'AutoRenew',
        'instanceId' => 'InstanceId',
        'period'     => 'Period',
        'periodUnit' => 'PeriodUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return RenewARMServerInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
