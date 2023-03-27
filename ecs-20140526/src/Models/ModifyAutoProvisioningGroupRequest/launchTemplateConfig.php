<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoProvisioningGroupRequest;

use AlibabaCloud\Tea\Model;

class launchTemplateConfig extends Model
{
    /**
     * @description The instance type in the extended configuration. Valid values of N: 1 to 20. For more information about the valid values of this parameter, see [Instance families](~~25378~~).
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The highest price of preemptible instances that is specified in the extended configuration.
     *
     * @example 3
     *
     * @var float
     */
    public $maxPrice;

    /**
     * @description The priority of the extended configuration. A value of 0 indicates the highest priority. The value must be greater than 0.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the vSwitch in extended configuration. The zone of the instances created from the extended configuration is determined by the vSwitch.
     *
     * @example vsw-sn5bsitu4lfzgc5o7****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The weight of the instance type in the extended configuration. A greater weight indicates that a single instance has more computing power and that fewer instances are required. The value must be greater than 0.
     *
     * The weight is calculated based on the computing power of the instance type and the minimum computing power of a single instance in the cluster to be created by the auto provisioning group. For example, assume that the minimum computing power of a single instance is 8 vCPUs and 60 GiB of memory.
     *
     *   For an instance type with 8 vCPUs and 60 GiB of memory, you can set the weight to 1.
     *   For an instance type with 16 vCPUs and 120 GiB of memory, you can set the weight to 2.
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
