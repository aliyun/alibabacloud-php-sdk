<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\RenewServiceInstanceResourcesRequest;

use AlibabaCloud\Tea\Model;

class resourcePeriod extends Model
{
    /**
     * @description The renewal duration for the resource. The unit is specified by PeriodUnit.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The time unit for the renewal duration of the resource, which is the unit for the Period parameter. Valid values: Month, Year. Default value: Month.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description Resource ARN (Aliyun Resource Name).
     *
     * @example acs:ecs:cn-hongkong:1488317743351199:instance/i-j6c6f3lbky38o8rpeqw2
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
