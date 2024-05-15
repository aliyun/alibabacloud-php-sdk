<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest;

use AlibabaCloud\Tea\Model;

class launchTemplateConfig extends Model
{
    /**
     * @description The architectures of the instance types.
     *
     * @var string[]
     */
    public $architectures;

    /**
     * @description Specifies whether to include burstable instance types. Valid values:
     *
     *   Exclude: does not include burstable instance types.
     *   Include: includes burstable instance types.
     *   Required: includes only burstable instance types.
     *
     * Default value: Include.
     * @example Include
     *
     * @var string
     */
    public $burstablePerformance;

    /**
     * @description The number of vCPU cores of the instance type.
     *
     * @var int[]
     */
    public $cores;

    /**
     * @description The instance types that you want to exclude.
     *
     * @var string[]
     */
    public $excludedInstanceTypes;

    /**
     * @description The instance family level of the instance type in extended configuration N. This parameter is used to filter instance types. Valid values:
     *
     *   EntryLevel: entry level (shared instance types). Instance types of this level are the most cost-effective but may not provide stable computing performance. Instance types of this level are suitable for scenarios in which the CPU utilization is low. For more information, see [Shared instance families](https://help.aliyun.com/document_detail/108489.html).
     *   EnterpriseLevel: enterprise level. Instance types of this level provide stable performance and dedicated resources and are suitable for scenarios that require high stability. For more information, see the [Overview of instance families](https://help.aliyun.com/document_detail/25378.html) topic.
     *   CreditEntryLevel: credit entry level (burstable instance types). CPU credits are used to ensure computing performance. Instance types of this level are suitable for scenarios in which the CPU utilization is low but may fluctuate in specific cases. For more information, see [Overview of burstable instances](https://help.aliyun.com/document_detail/59977.html).
     *
     * Valid values of N: 1 to 10.
     * @example EnterpriseLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @description The instance type in extended configuration N. Valid values of N: 1 to 20. For more information about the valid values of this parameter, see [Instance families](https://help.aliyun.com/document_detail/25378.html).
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The maximum price of preemptible instances in extended configuration N.
     *
     * >  If you specify one or more other `LaunchTemplateConfig.N.*` parameters, you must also specify `LaunchTemplateConfig.N.MaxPrice`.
     * @example 3
     *
     * @var float
     */
    public $maxPrice;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example false
     *
     * @var int
     */
    public $maxQuantity;

    /**
     * @description The memory sizes of the instance type.
     *
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
     * >  If you specify one or more other `LaunchTemplateConfig.N.*` parameters, you must also specify `LaunchTemplateConfig.N.VSwitchId`.
     * @example vsw-sn5bsitu4lfzgc5o7****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The weight of the instance type in extended configuration N. A greater weight indicates that a single instance has more computing power and fewer instances are required. The value must be greater than 0.
     *
     * The weight is calculated based on the computing power of the specified instance type and the minimum computing power of a single instance in the cluster to be created by the auto provisioning group. For example, assume that the minimum computing power of a single instance is 8 vCPUs and 60 GiB of memory.
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
