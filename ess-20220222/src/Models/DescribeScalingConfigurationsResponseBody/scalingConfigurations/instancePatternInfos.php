<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations;

use AlibabaCloud\Tea\Model;

class instancePatternInfos extends Model
{
    /**
     * @description The architecture types of the instance types. Valid values:
     *
     *   X86: x86
     *   Heterogeneous: heterogeneous computing, such as GPU-accelerated or FPGA-accelerated
     *   BareMetal: ECS Bare Metal Instance
     *   Arm: Arm
     *   SuperComputeCluster: Super Computing Cluster
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
     * @description The instance types that are excluded. You can use wildcard characters, such as an asterisk (\\*), to exclude an instance type or an instance family. Examples:
     *
     *   ecs.c6.large: The ecs.c6.large instance type is excluded.
     *   ecs.c6.\\*: The c6 instance family is excluded.
     *
     * @var string[]
     */
    public $excludedInstanceTypes;

    /**
     * @description The level of the instance family.
     *
     *   EntryLevel: entry level (shared instance types) Instance types of this level are the most cost-effective but may not provide stable computing performance. Instance types of this level are suitable for scenarios in which the CPU utilization is low. For more information, see [Shared instance families](https://help.aliyun.com/document_detail/108489.html).
     *   EnterpriseLevel: enterprise level. Instance types of this level provide stable performance and dedicated resources and are suitable for scenarios that require high stability. For more information, see [Overview of instance families](https://help.aliyun.com/document_detail/25378.html).
     *   CreditEntryLevel: credit entry level (burstable instance types). CPU credits are used to ensure computing performance. Instance types of this level are suitable for scenarios in which the CPU utilization is low but may fluctuate in specific cases. For more information, see [Overview of burstable instances](https://help.aliyun.com/document_detail/59977.html).
     *
     * @example EnterpriseLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @description The maximum hourly price for pay-as-you-go or preemptible instances.
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
