<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\launchTemplateConfigs;

use AlibabaCloud\Tea\Model;

class launchTemplateConfig extends Model
{
    /**
     * @description The instance type specified in the extended configurations.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The maximum price of the instance type specified in the extended configurations.
     *
     * @example 3
     *
     * @var float
     */
    public $maxPrice;

    /**
     * @description The priority of the instance type specified in the extended configurations. A value of 0 indicates the highest priority.
     *
     * @example 1
     *
     * @var float
     */
    public $priority;

    /**
     * @description The ID of the vSwitch specified in the extended configurations.
     *
     * @example vsw-sn5bsitu4lfzgc5o7****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The weight of the instance type specified in the extended configurations.
     *
     * @example 2
     *
     * @var float
     */
    public $weightedCapacity;
    protected $_name = [
        'instanceType'     => 'InstanceType',
        'maxPrice'         => 'MaxPrice',
        'priority'         => 'Priority',
        'vSwitchId'        => 'VSwitchId',
        'weightedCapacity' => 'WeightedCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->weightedCapacity) {
            $res['WeightedCapacity'] = $this->weightedCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['WeightedCapacity'])) {
            $model->weightedCapacity = $map['WeightedCapacity'];
        }

        return $model;
    }
}
