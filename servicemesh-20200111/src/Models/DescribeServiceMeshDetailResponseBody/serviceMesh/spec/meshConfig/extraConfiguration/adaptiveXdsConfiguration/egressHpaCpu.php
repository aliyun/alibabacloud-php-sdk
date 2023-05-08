<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\adaptiveXdsConfiguration;

use AlibabaCloud\Tea\Model;

class egressHpaCpu extends Model
{
    /**
     * @description The expected CPU utilization when HPA is enabled. Valid values: 1 to 100. If the CPU utilization exceeds this value, the number of pod replicas increases. If the CPU utilization is less than this value, the number of pod replicas decreases.
     *
     * @example 80
     *
     * @var int
     */
    public $targetAverageUtilization;
    protected $_name = [
        'targetAverageUtilization' => 'TargetAverageUtilization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetAverageUtilization) {
            $res['TargetAverageUtilization'] = $this->targetAverageUtilization;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return egressHpaCpu
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetAverageUtilization'])) {
            $model->targetAverageUtilization = $map['TargetAverageUtilization'];
        }

        return $model;
    }
}
