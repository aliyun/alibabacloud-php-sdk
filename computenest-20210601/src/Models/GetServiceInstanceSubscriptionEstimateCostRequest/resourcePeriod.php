<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceSubscriptionEstimateCostRequest;

use AlibabaCloud\Tea\Model;

class resourcePeriod extends Model
{
    /**
     * @description Renewal duration. The unit is specified by PeriodUnit.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The time unit for the resource renewal duration, which is the unit of the Period parameter. Valid values: Month, Year. Default value: Month.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description Resource ARN (Aliyun Resource Name).
     *
     * @example acs:ecs:cn-guangzhou:1361753504587228:instance/i-7xv9pgeqvhxg10jji3vd
     *
     * @var string
     */
    public $resourceArn;
    protected $_name = [
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'resourceArn' => 'ResourceArn',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePeriod
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }

        return $model;
    }
}
