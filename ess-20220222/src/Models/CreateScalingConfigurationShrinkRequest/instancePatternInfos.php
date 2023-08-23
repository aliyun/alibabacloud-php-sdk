<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationShrinkRequest;

use AlibabaCloud\Tea\Model;

class instancePatternInfos extends Model
{
    /**
     * @description The architectures of the instance types. Valid values:
     *
     *   X86: x86 architecture.
     *   Heterogeneous: heterogeneous architecture, such as GPUs and FPGAs.
     *   BareMetal: ECS Bare Metal Instance architecture.
     *   Arm: ARM architecture.
     *   SuperComputeCluster: Super Computing Cluster architecture.
     *
     * By default, all values are included.
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
     * Default value: Include
     * @example Include
     *
     * @var string
     */
    public $burstablePerformance;

    /**
     * @description The number of vCPUs that you want to allocate to an instance type in intelligent configuration mode. This parameter is used to filter the available instance types that meet the specified criteria. For more information, see the "[Instance families](~~25378~~)" topic.
     *
     * Take note of the following items when you specify Cores:
     *
     *   InstancePatternInfos is available only for scaling groups that reside in VPCs.
     *   If you specify InstancePatternInfos, you must specify Cores and Memory.
     *   If you specify an instance type by using InstanceType or InstanceTypes, Auto Scaling preferentially uses the instance type that is specified by InstanceType or InstanceTypes for scale-outs. If the specified instance type does not have sufficient inventory, Auto Scaling creates instances by using the lowest-priced instance type that is specified by InstancePatternInfos.
     *
     * @example 2
     *
     * @var int
     */
    public $cores;

    /**
     * @description The instance types that you want to exclude. You can use wildcard characters, such as asterisks (\*), to exclude an instance type or an instance family. Examples:
     *
     *   ecs.c6.large: excludes the ecs.c6.large instance type.
     *   ecs.c6.\*: excludes the c6 instance family.
     *
     * @var string[]
     */
    public $excludedInstanceTypes;

    /**
     * @description The level of the instance type, which is used to filter instance types that meet the specified criteria. This parameter takes effect only if you set `CostOptimization` to true. Valid values:
     *
     *   EntryLevel: entry level (shared instance type). Instance types of this level are the most cost-effective but may not provide stable computing performance in a consistent manner. Instance types of this level are suitable for business scenarios in which the CPU utilization is low. For more information, see the "[Shared instance families](~~108489~~)" topic.
     *   EnterpriseLevel: enterprise level. Instance types of this level provide stable performance and dedicated resources and are suitable for business scenarios that require high stability. For more information, see the "[Instance families](~~25378~~)" topic.
     *   CreditEntryLevel: credit entry level. This value is valid only for burstable instances. CPU credits are used to ensure computing performance. Instance types of this level are suitable for business scenarios in which the CPU utilization is low but may fluctuate in specific cases. For more information, see the "[Overview](~~59977~~)" topic of burstable instances.
     *
     * @example EnterpriseLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @description The maximum hourly price of a pay-as-you-go or preemptible instance in intelligent configuration mode. This parameter is used to filter the available instance types that meet the specified criteria.
     *
     * > If you set SpotStrategy to SpotWithPriceLimit, you must specify MaxPrice. In other cases, MaxPrice is optional.
     * @example 2
     *
     * @var float
     */
    public $maxPrice;

    /**
     * @description The memory size that you want to allocate to an instance type in intelligent configuration mode. Unit: GiB. This parameter is used to filter the available instance types that meet the specified criteria.
     *
     * @example 4
     *
     * @var float
     */
    public $memory;
    protected $_name = [
        'architectures'         => 'Architectures',
        'burstablePerformance'  => 'BurstablePerformance',
        'cores'                 => 'Cores',
        'excludedInstanceTypes' => 'ExcludedInstanceTypes',
        'instanceFamilyLevel'   => 'InstanceFamilyLevel',
        'maxPrice'              => 'MaxPrice',
        'memory'                => 'Memory',
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
        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instancePatternInfos
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
            $model->cores = $map['Cores'];
        }
        if (isset($map['ExcludedInstanceTypes'])) {
            if (!empty($map['ExcludedInstanceTypes'])) {
                $model->excludedInstanceTypes = $map['ExcludedInstanceTypes'];
            }
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
