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
     * @var string[]
     */
    public $cpuArchitectures;

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
     * @var string[]
     */
    public $gpuSpecs;

    /**
     * @var string[]
     */
    public $instanceCategories;

    /**
     * @description The level of the instance family.
     *
     *   EntryLevel: entry level (shared instance types). Instance types of this level are the most cost-effective but may not provide stable computing performance. Instance types of this level are suitable for scenarios in which the CPU utilization is low. For more information, see [Shared instance families](https://help.aliyun.com/document_detail/108489.html).
     *   EnterpriseLevel: enterprise level. Instance types of this level provide stable performance and dedicated resources, and are suitable for scenarios that require high stability. For more information, see [Overview of instance families](https://help.aliyun.com/document_detail/25378.html).
     *   CreditEntryLevel: credit entry level (burstable instance types). CPU credits are used to ensure computing performance. Instance types of this level are suitable for scenarios in which the CPU utilization is low but may fluctuate in specific cases. For more information, see [Overview of burstable instances](https://help.aliyun.com/document_detail/59977.html).
     *
     * @example EnterpriseLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @var string[]
     */
    public $instanceTypeFamilies;

    /**
     * @description The maximum hourly price for the pay-as-you-go or preemptible instances.
     *
     * @example 2
     *
     * @var float
     */
    public $maxPrice;

    /**
     * @var int
     */
    public $maximumCpuCoreCount;

    /**
     * @var int
     */
    public $maximumGpuAmount;

    /**
     * @var float
     */
    public $maximumMemorySize;

    /**
     * @description The memory size of the instance type. Unit: GiB.
     *
     * @example 4
     *
     * @var float
     */
    public $memory;

    /**
     * @var int
     */
    public $minimumBaselineCredit;

    /**
     * @var int
     */
    public $minimumCpuCoreCount;

    /**
     * @var int
     */
    public $minimumEniIpv6AddressQuantity;

    /**
     * @var int
     */
    public $minimumEniPrivateIpAddressQuantity;

    /**
     * @var int
     */
    public $minimumEniQuantity;

    /**
     * @var int
     */
    public $minimumGpuAmount;

    /**
     * @var int
     */
    public $minimumInitialCredit;

    /**
     * @var float
     */
    public $minimumMemorySize;

    /**
     * @var string[]
     */
    public $physicalProcessorModels;
    protected $_name = [
        'architectures'                      => 'Architectures',
        'burstablePerformance'               => 'BurstablePerformance',
        'cores'                              => 'Cores',
        'cpuArchitectures'                   => 'CpuArchitectures',
        'excludedInstanceTypes'              => 'ExcludedInstanceTypes',
        'gpuSpecs'                           => 'GpuSpecs',
        'instanceCategories'                 => 'InstanceCategories',
        'instanceFamilyLevel'                => 'InstanceFamilyLevel',
        'instanceTypeFamilies'               => 'InstanceTypeFamilies',
        'maxPrice'                           => 'MaxPrice',
        'maximumCpuCoreCount'                => 'MaximumCpuCoreCount',
        'maximumGpuAmount'                   => 'MaximumGpuAmount',
        'maximumMemorySize'                  => 'MaximumMemorySize',
        'memory'                             => 'Memory',
        'minimumBaselineCredit'              => 'MinimumBaselineCredit',
        'minimumCpuCoreCount'                => 'MinimumCpuCoreCount',
        'minimumEniIpv6AddressQuantity'      => 'MinimumEniIpv6AddressQuantity',
        'minimumEniPrivateIpAddressQuantity' => 'MinimumEniPrivateIpAddressQuantity',
        'minimumEniQuantity'                 => 'MinimumEniQuantity',
        'minimumGpuAmount'                   => 'MinimumGpuAmount',
        'minimumInitialCredit'               => 'MinimumInitialCredit',
        'minimumMemorySize'                  => 'MinimumMemorySize',
        'physicalProcessorModels'            => 'PhysicalProcessorModels',
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
        if (null !== $this->cpuArchitectures) {
            $res['CpuArchitectures'] = $this->cpuArchitectures;
        }
        if (null !== $this->excludedInstanceTypes) {
            $res['ExcludedInstanceTypes'] = $this->excludedInstanceTypes;
        }
        if (null !== $this->gpuSpecs) {
            $res['GpuSpecs'] = $this->gpuSpecs;
        }
        if (null !== $this->instanceCategories) {
            $res['InstanceCategories'] = $this->instanceCategories;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->instanceTypeFamilies) {
            $res['InstanceTypeFamilies'] = $this->instanceTypeFamilies;
        }
        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }
        if (null !== $this->maximumCpuCoreCount) {
            $res['MaximumCpuCoreCount'] = $this->maximumCpuCoreCount;
        }
        if (null !== $this->maximumGpuAmount) {
            $res['MaximumGpuAmount'] = $this->maximumGpuAmount;
        }
        if (null !== $this->maximumMemorySize) {
            $res['MaximumMemorySize'] = $this->maximumMemorySize;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->minimumBaselineCredit) {
            $res['MinimumBaselineCredit'] = $this->minimumBaselineCredit;
        }
        if (null !== $this->minimumCpuCoreCount) {
            $res['MinimumCpuCoreCount'] = $this->minimumCpuCoreCount;
        }
        if (null !== $this->minimumEniIpv6AddressQuantity) {
            $res['MinimumEniIpv6AddressQuantity'] = $this->minimumEniIpv6AddressQuantity;
        }
        if (null !== $this->minimumEniPrivateIpAddressQuantity) {
            $res['MinimumEniPrivateIpAddressQuantity'] = $this->minimumEniPrivateIpAddressQuantity;
        }
        if (null !== $this->minimumEniQuantity) {
            $res['MinimumEniQuantity'] = $this->minimumEniQuantity;
        }
        if (null !== $this->minimumGpuAmount) {
            $res['MinimumGpuAmount'] = $this->minimumGpuAmount;
        }
        if (null !== $this->minimumInitialCredit) {
            $res['MinimumInitialCredit'] = $this->minimumInitialCredit;
        }
        if (null !== $this->minimumMemorySize) {
            $res['MinimumMemorySize'] = $this->minimumMemorySize;
        }
        if (null !== $this->physicalProcessorModels) {
            $res['PhysicalProcessorModels'] = $this->physicalProcessorModels;
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
        if (isset($map['CpuArchitectures'])) {
            if (!empty($map['CpuArchitectures'])) {
                $model->cpuArchitectures = $map['CpuArchitectures'];
            }
        }
        if (isset($map['ExcludedInstanceTypes'])) {
            if (!empty($map['ExcludedInstanceTypes'])) {
                $model->excludedInstanceTypes = $map['ExcludedInstanceTypes'];
            }
        }
        if (isset($map['GpuSpecs'])) {
            if (!empty($map['GpuSpecs'])) {
                $model->gpuSpecs = $map['GpuSpecs'];
            }
        }
        if (isset($map['InstanceCategories'])) {
            if (!empty($map['InstanceCategories'])) {
                $model->instanceCategories = $map['InstanceCategories'];
            }
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['InstanceTypeFamilies'])) {
            if (!empty($map['InstanceTypeFamilies'])) {
                $model->instanceTypeFamilies = $map['InstanceTypeFamilies'];
            }
        }
        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }
        if (isset($map['MaximumCpuCoreCount'])) {
            $model->maximumCpuCoreCount = $map['MaximumCpuCoreCount'];
        }
        if (isset($map['MaximumGpuAmount'])) {
            $model->maximumGpuAmount = $map['MaximumGpuAmount'];
        }
        if (isset($map['MaximumMemorySize'])) {
            $model->maximumMemorySize = $map['MaximumMemorySize'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['MinimumBaselineCredit'])) {
            $model->minimumBaselineCredit = $map['MinimumBaselineCredit'];
        }
        if (isset($map['MinimumCpuCoreCount'])) {
            $model->minimumCpuCoreCount = $map['MinimumCpuCoreCount'];
        }
        if (isset($map['MinimumEniIpv6AddressQuantity'])) {
            $model->minimumEniIpv6AddressQuantity = $map['MinimumEniIpv6AddressQuantity'];
        }
        if (isset($map['MinimumEniPrivateIpAddressQuantity'])) {
            $model->minimumEniPrivateIpAddressQuantity = $map['MinimumEniPrivateIpAddressQuantity'];
        }
        if (isset($map['MinimumEniQuantity'])) {
            $model->minimumEniQuantity = $map['MinimumEniQuantity'];
        }
        if (isset($map['MinimumGpuAmount'])) {
            $model->minimumGpuAmount = $map['MinimumGpuAmount'];
        }
        if (isset($map['MinimumInitialCredit'])) {
            $model->minimumInitialCredit = $map['MinimumInitialCredit'];
        }
        if (isset($map['MinimumMemorySize'])) {
            $model->minimumMemorySize = $map['MinimumMemorySize'];
        }
        if (isset($map['PhysicalProcessorModels'])) {
            if (!empty($map['PhysicalProcessorModels'])) {
                $model->physicalProcessorModels = $map['PhysicalProcessorModels'];
            }
        }

        return $model;
    }
}
