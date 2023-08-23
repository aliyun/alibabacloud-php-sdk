<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations;

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
     * @var string[]
     */
    public $architectures;

    /**
     * @description Indicates whether burstable instance types are included. Valid values:
     *
     *   Exclude: Burstable instance types are not included.
     *   Include: Burstable instance types are included.
     *   Required: Only burstable instance types are included.
     *
     * @example Include
     *
     * @var string
     */
    public $burstablePerformance;

    /**
     * @description The number of vCPUs of the instance type.
     *
     * @example 2
     *
     * @var int
     */
    public $cores;

    /**
     * @description The instance types that are excluded. You can use wildcard characters such as an asterisk (\*) to exclude an instance type or an instance family. Examples:
     *
     *   ecs.c6.large: The ecs.c6.large instance type is excluded.
     *   ecs.c6.\*: The c6 instance family is excluded.
     *
     * @var string[]
     */
    public $excludedInstanceTypes;

    /**
     * @description The level of the instance family.
     *
     *   EntryLevel: shared instance type. Instances of this level are cost-effective, but do not provide stable computing performance. Instances of this level are suitable for scenarios in which the CPU utilization is low. For more information, see [Shared instance families](~~108489~~).
     *   EnterpriseLevel: Instances of this level provide stable performance and dedicated resources, and are suitable for scenarios in which high stability is required. For more information, see [Overview of instance families](~~25378~~).
     *   CreditEntryLevel: This value is available only for burstable instances. CPU credits are used to ensure computing performance. Instances of this level are suitable for scenarios in which the CPU utilization is low but may fluctuate in specific cases. For more information, see [Overview](~~59977~~) of burstable instances
     *
     * @example EnterpriseLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @description The maximum hourly price for pay-as-you-go instances or preemptible instances.
     *
     * @example 2
     *
     * @var float
     */
    public $maxPrice;

    /**
     * @description The memory size of the instance type. Unit: GiB.
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
