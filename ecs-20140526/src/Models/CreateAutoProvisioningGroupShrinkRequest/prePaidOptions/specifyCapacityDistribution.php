<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\prePaidOptions;

use AlibabaCloud\Tea\Model;

class specifyCapacityDistribution extends Model
{
    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @var int
     */
    public $minTargetCapacity;
    protected $_name = [
        'instanceTypes'     => 'InstanceTypes',
        'minTargetCapacity' => 'MinTargetCapacity',
    ];

    public function validate()
    {
    }

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
