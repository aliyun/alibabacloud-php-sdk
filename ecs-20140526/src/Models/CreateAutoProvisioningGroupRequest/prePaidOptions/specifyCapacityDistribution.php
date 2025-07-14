<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest\prePaidOptions;

use AlibabaCloud\Tea\Model;

class specifyCapacityDistribution extends Model
{
    /**
     * @description Details about the instance types. Duplicate instance types are not allowed and the instance types are within the LaunchTemplateConfig.InstanceType range.
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description The minimum number of instances to be delivered within the `InstanceTypes` range.
     *
     * >  `sum(MinTargetCapacity)<= TotalTargetCapacity` indicates that the sum of MinTargetCapacity values of all instance types cannot exceed the TotalTargetCapacity value. If any instance type set cannot meet the MinTargetCapacity requirement due to insufficient inventory or other reasons, the entire request fails.
     *
     * @example 5
     *
     * @var int
     */
    public $minTargetCapacity;
    protected $_name = [
        'instanceTypes' => 'InstanceTypes',
        'minTargetCapacity' => 'MinTargetCapacity',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }
        if (null !== $this->minTargetCapacity) {
            $res['MinTargetCapacity'] = $this->minTargetCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specifyCapacityDistribution
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }
        if (isset($map['MinTargetCapacity'])) {
            $model->minTargetCapacity = $map['MinTargetCapacity'];
        }

        return $model;
    }
}
