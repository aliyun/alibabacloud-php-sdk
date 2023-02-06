<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest;

use AlibabaCloud\Tea\Model;

class launchTemplateConfig extends Model
{
    /**
     * @var string[]
     */
    public $architectures;

    /**
     * @var string
     */
    public $burstablePerformance;

    /**
     * @var int[]
     */
    public $cores;

    /**
     * @var string[]
     */
    public $excludedInstanceTypes;

    /**
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @description The instance type in extended configuration N. Valid values of N: 1 to 20. For more information about the valid values of this parameter, see [Instance families](~~25378~~).
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The maximum price of preemptible instances in extended configuration N.
     *
     * >  If you set one or more other `LaunchTemplateConfig.N.*` parameters, you must also set the `LaunchTemplateConfig.N.MaxPrice` parameter.
     * @example 3
     *
     * @var float
     */
    public $maxPrice;

    /**
     * @var int
     */
    public $maxQuantity;

    /**
     * @var float[]
     */
    public $memories;

    /**
     * @description The priority of extended configuration N. A value of 0 indicates the highest priority. Valid values: 0 to ∞.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the vSwitch in extended configuration N. The zone of the ECS instances created from the extended configuration is determined by the vSwitch.
     *
     * >  If you set one or more other `LaunchTemplateConfig.N.*` parameters, you must also set the `LaunchTemplateConfig.N.VSwitchId` parameter.
     * @example vsw-sn5bsitu4lfzgc5o7****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The weight of the instance type specified in extended configuration N. A greater weight indicates that a single instance has more computing power and that fewer instances are required. The value must be greater than 0.
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
        'architectures'         => 'Architectures',
        'burstablePerformance'  => 'BurstablePerformance',
        'cores'                 => 'Cores',
        'excludedInstanceTypes' => 'ExcludedInstanceTypes',
        'instanceFamilyLevel'   => 'InstanceFamilyLevel',
        'instanceType'          => 'InstanceType',
        'maxPrice'              => 'MaxPrice',
        'maxQuantity'           => 'MaxQuantity',
        'memories'              => 'Memories',
        'priority'              => 'Priority',
        'vSwitchId'             => 'VSwitchId',
        'weightedCapacity'      => 'WeightedCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architectures) {
            $res['Architectures'] = $this->architectures;
        }
        if (null !== $this->burstablePerformance) {
            $res['BurstablePerformance'] = $this->burstablePerformance;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->excludedInstanceTypes) {
            $res['ExcludedInstanceTypes'] = $this->excludedInstanceTypes;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }
        if (null !== $this->maxQuantity) {
            $res['MaxQuantity'] = $this->maxQuantity;
        }
        if (null !== $this->memories) {
            $res['Memories'] = $this->memories;
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
        if (isset($map['Architectures'])) {
            if (!empty($map['Architectures'])) {
                $model->architectures = $map['Architectures'];
            }
        }
        if (isset($map['BurstablePerformance'])) {
            $model->burstablePerformance = $map['BurstablePerformance'];
        }
        if (isset($map['Cores'])) {
            if (!empty($map['Cores'])) {
                $model->cores = $map['Cores'];
            }
        }
        if (isset($map['ExcludedInstanceTypes'])) {
            if (!empty($map['ExcludedInstanceTypes'])) {
                $model->excludedInstanceTypes = $map['ExcludedInstanceTypes'];
            }
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }
        if (isset($map['MaxQuantity'])) {
            $model->maxQuantity = $map['MaxQuantity'];
        }
        if (isset($map['Memories'])) {
            if (!empty($map['Memories'])) {
                $model->memories = $map['Memories'];
            }
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
