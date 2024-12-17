<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationShrinkRequest;

use AlibabaCloud\Tea\Model;

class instancePatternInfos extends Model
{
    /**
     * @description The architecture types of the instance types. Valid values:
     *
     *   X86: x86.
     *   Heterogeneous: heterogeneous computing, such as GPU-accelerated or FPGA-accelerated.
     *   BareMetal: ECS Bare Metal Instance.
     *   Arm: Arm.
     *
     * By default, all values are selected.
     * @var string[]
     */
    public $architectures;

    /**
     * @description Specifies whether to include burstable instance types. Valid values:
     *
     *   Exclude: excludes burstable instance types.
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
     * @description The number of vCPUs per instance type in intelligent configuration mode. You can specify this parameter to filter the available instance types. For more information, see [Overview of instance families](https://help.aliyun.com/document_detail/25378.html).
     *
     * Before you specify this parameter, take note of the following items:
     *
     *   You can specify InstancePatternInfo only if your scaling group resides in a virtual private cloud (VPC).
     *   If you specify InstancePatternInfo, you must also specify InstancePatternInfo.Cores and InstancePatternInfo.Memory.
     *   Auto Scaling preferentially uses the instance type specified by InstanceType or InstanceTypes to create instances. If the specified instance type does not have sufficient inventory, Auto Scaling selects the lowest-priced instance type specified by InstancePatternInfo to create instances.
     *
     * @example 2
     *
     * @var int
     */
    public $cores;

    /**
     * @description The CPU architectures of the instance types. Valid values:
     *
     * >  You can specify up to two CPU architectures.
     *
     *   x86
     *   Arm
     *
     * @var string[]
     */
    public $cpuArchitectures;

    /**
     * @description The instance types that you want to exclude. You can use an asterisk (\\*) as a wildcard character to exclude an instance type or an instance family. Examples:
     *
     *   ecs.c6.large: excludes the ecs.c6.large instance type.
     *   ecs.c6.\\*: excludes the c6 instance family.
     *
     * @var string[]
     */
    public $excludedInstanceTypes;

    /**
     * @description The GPU models.
     *
     * @var string[]
     */
    public $gpuSpecs;

    /**
     * @description The categories of the instance types. Valid values:
     *
     *   General-purpose: general-purpose instance type.
     *   Compute-optimized: compute-optimized instance type.
     *   Memory-optimized: memory-optimized instance type.
     *   Big data: big data instance type.
     *   Local SSDs: instance type that uses local SSDs.
     *   High Clock Speed: instance type that has a high clock speed.
     *   Enhanced: enhanced instance type.
     *   Shared: shared instance type.
     *   Compute-optimized with GPU: GPU-accelerated compute-optimized instance type.
     *   Visual Compute-optimized: visual compute-optimized instance type.
     *   Heterogeneous Service: heterogeneous service instance type.
     *   Compute-optimized with FPGA: FPGA-accelerated compute-optimized instance type.
     *   Compute-optimized with NPU: NPU-accelerated compute-optimized instance type.
     *   ECS Bare Metal: ECS Bare Metal Instance type.
     *   High Performance Compute: HPC-optimized instance type.
     *
     * @var string[]
     */
    public $instanceCategories;

    /**
     * @description The level of the instance family. You can specify this parameter to obtain the available instance types. This parameter takes effect only if you set `CostOptimization` to true. Valid values:
     *
     *   EntryLevel: entry-level (shared instance types). Instance types of this level are the most cost-effective but may not ensure stable computing performance. Instance types of this level are suitable for scenarios in which the CPU utilization is low. For more information, see [Shared instance families](https://help.aliyun.com/document_detail/108489.html).
     *   EnterpriseLevel: enterprise-level. Instance types of this level provide stable performance and dedicated resources and are suitable for business scenarios that require high stability. For more information, see [Overview of instance families](https://help.aliyun.com/document_detail/25378.html).
     *   CreditEntryLevel: credit entry-level (burstable instance types). CPU credits are used to ensure computing performance. Instance types of this level are suitable for scenarios in which the CPU utilization is low but may fluctuate in specific cases. For more information, see [Overview](https://help.aliyun.com/document_detail/59977.html) of burstable instances.
     *
     * @example EnterpriseLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @description The instance families that you want to specify. You can specify up to 10 instance families in each call.
     *
     * @var string[]
     */
    public $instanceTypeFamilies;

    /**
     * @description The maximum hourly price of pay-as-you-go or preemptible instances in intelligent configuration mode. You can specify this parameter to obtain the available instance types.
     *
     * >  If you set SpotStrategy to SpotWithPriceLimit, you must specify this parameter. In other cases, this parameter is optional.
     * @example 2
     *
     * @var float
     */
    public $maxPrice;

    /**
     * @description The maximum number of vCPUs per instance type.
     *
     * >  The value of MaximumCpuCoreCount cannot exceed four times the value of MinimumCpuCoreCount.
     * @example 4
     *
     * @var int
     */
    public $maximumCpuCoreCount;

    /**
     * @description The maximum number of GPUs per instance. The value must be a positive integer.
     *
     * @example 2
     *
     * @var int
     */
    public $maximumGpuAmount;

    /**
     * @description The maximum memory size per instance. Unit: GiB.
     *
     * @example 4
     *
     * @var float
     */
    public $maximumMemorySize;

    /**
     * @description The memory size per instance type in intelligent configuration mode. Unit: GiB. You can specify this parameter to filter the available instance types.
     *
     * @example 4
     *
     * @var float
     */
    public $memory;

    /**
     * @description The baseline vCPU computing performance (overall baseline performance of all vCPUs) of each t5 or t6 burstable instance.
     *
     * @example 12
     *
     * @var int
     */
    public $minimumBaselineCredit;

    /**
     * @description The minimum number of vCPUs per instance type.
     *
     * @example 2
     *
     * @var int
     */
    public $minimumCpuCoreCount;

    /**
     * @description The minimum number of IPv6 addresses per ENI.
     *
     * @example 1
     *
     * @var int
     */
    public $minimumEniIpv6AddressQuantity;

    /**
     * @description The minimum number of IPv4 addresses per ENI.
     *
     * @example 2
     *
     * @var int
     */
    public $minimumEniPrivateIpAddressQuantity;

    /**
     * @description The minimum number of elastic network interfaces (ENIs) per instance.
     *
     * @example 2
     *
     * @var int
     */
    public $minimumEniQuantity;

    /**
     * @description The minimum number of GPUs per instance. The value must be a positive integer.
     *
     * @example 2
     *
     * @var int
     */
    public $minimumGpuAmount;

    /**
     * @description The initial vCPU credits of each t5 or t6 burstable instance.
     *
     * @example 12
     *
     * @var int
     */
    public $minimumInitialCredit;

    /**
     * @description The minimum memory size per instance. Unit: GiB.
     *
     * @example 4
     *
     * @var float
     */
    public $minimumMemorySize;

    /**
     * @description The processor models of the instance types. You can specify up to 10 processor models.
     *
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
