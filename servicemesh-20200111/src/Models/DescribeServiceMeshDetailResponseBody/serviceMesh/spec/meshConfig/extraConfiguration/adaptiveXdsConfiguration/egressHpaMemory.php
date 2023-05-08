<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\adaptiveXdsConfiguration;

use AlibabaCloud\Tea\Model;

class egressHpaMemory extends Model
{
    /**
     * @description The expected memory usage when HPA is enabled. Valid values: 1 to 100. If the memory usage exceeds this value, the number of pod replicas increases. If the memory usage is less than this value, the number of pod replicas decreases.
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
     * @return egressHpaMemory
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
