<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DescribePatternTypesRequest extends Model
{
    /**
     * @description The architectures of instance types. Valid values:
     *
     *   X86: x86
     *   Heterogeneous: heterogeneous computing, such as GPU-accelerated or FPGA-accelerated
     *   BareMetal: ECS Bare Metal Instance
     *   Arm: Arm
     *   SuperComputeCluster: Super Computing Cluster
     *
     * By default, all values are selected.
     * @var string[]
     */
    public $architecture;

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
     * @description The channel ID. This parameter is not for public use.
     *
     * @example 79425074
     *
     * @var int
     */
    public $channelId;

    /**
     * @description The number of vCPUs that you want to assign to the instance type.
     *
     * @example 2
     *
     * @var int
     */
    public $cores;

    /**
     * @description The number of vCPUs that you want to assign to the instance type. You can specify multiple vCPUs.
     *
     * @var int[]
     */
    public $coresList;

    /**
     * @var string[]
     */
    public $cpuArchitectures;

    /**
     * @var string[]
     */
    public $excludedInstanceType;

    /**
     * @var string[]
     */
    public $gpuSpecs;

    /**
     * @var string[]
     */
    public $instanceCategories;

    /**
     * @description The level of the instance family. Valid values:
     *
     *   EntryLevel: entry level
     *   EnterpriseLevel: enterprise level
     *   CreditEntryLevel: credit-based entry level For more information, see [Burstable instance families](https://help.aliyun.com/document_detail/59977.html).
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
     * @description The maximum hourly price for pay-as-you-go or preemptible instances.
     *
     * @example 2
     *
     * @var float
     */
    public $maxPrice;

    /**
     * @example 4
     *
     * @var int
     */
    public $maximumCpuCoreCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $maximumGpuAmount;

    /**
     * @example 4
     *
     * @var float
     */
    public $maximumMemorySize;

    /**
     * @description The memory size that you want to assign to the instance type. Unit: GiB.
     *
     * @example 4
     *
     * @var float
     */
    public $memory;

    /**
     * @description The memory size that you want to assign to the instance type. Unit: GiB. You can specify multiple memory sizes.
     *
     * @var float[]
     */
    public $memoryList;

    /**
     * @example 12
     *
     * @var int
     */
    public $minimumBaselineCredit;

    /**
     * @example 2
     *
     * @var int
     */
    public $minimumCpuCoreCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $minimumEniIpv6AddressQuantity;

    /**
     * @example 2
     *
     * @var int
     */
    public $minimumEniPrivateIpAddressQuantity;

    /**
     * @example 2
     *
     * @var int
     */
    public $minimumEniQuantity;

    /**
     * @example 2
     *
     * @var int
     */
    public $minimumGpuAmount;

    /**
     * @example 12
     *
     * @var int
     */
    public $minimumInitialCredit;

    /**
     * @example 4
     *
     * @var float
     */
    public $minimumMemorySize;

    /**
     * @var string[]
     */
    public $physicalProcessorModels;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The preemption policy that you want to apply to pay-as-you-go instances. Valid values:
     *
     *   NoSpot: The instances are created as regular pay-as-you-go instances.
     *   SpotWithPriceLimit: The instances are created as preemptible instances that have a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instances are created as preemptible instances for which the market price at the time of purchase is automatically used as the bidding price.
     *
     * Default value: NoSpot.
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The vSwitch IDs.
     *
     * @var string[]
     */
    public $vSwitchId;
    protected $_name = [
        'architecture'                       => 'Architecture',
        'burstablePerformance'               => 'BurstablePerformance',
        'channelId'                          => 'ChannelId',
        'cores'                              => 'Cores',
        'coresList'                          => 'CoresList',
        'cpuArchitectures'                   => 'CpuArchitectures',
        'excludedInstanceType'               => 'ExcludedInstanceType',
        'gpuSpecs'                           => 'GpuSpecs',
        'instanceCategories'                 => 'InstanceCategories',
        'instanceFamilyLevel'                => 'InstanceFamilyLevel',
        'instanceTypeFamilies'               => 'InstanceTypeFamilies',
        'maxPrice'                           => 'MaxPrice',
        'maximumCpuCoreCount'                => 'MaximumCpuCoreCount',
        'maximumGpuAmount'                   => 'MaximumGpuAmount',
        'maximumMemorySize'                  => 'MaximumMemorySize',
        'memory'                             => 'Memory',
        'memoryList'                         => 'MemoryList',
        'minimumBaselineCredit'              => 'MinimumBaselineCredit',
        'minimumCpuCoreCount'                => 'MinimumCpuCoreCount',
        'minimumEniIpv6AddressQuantity'      => 'MinimumEniIpv6AddressQuantity',
        'minimumEniPrivateIpAddressQuantity' => 'MinimumEniPrivateIpAddressQuantity',
        'minimumEniQuantity'                 => 'MinimumEniQuantity',
        'minimumGpuAmount'                   => 'MinimumGpuAmount',
        'minimumInitialCredit'               => 'MinimumInitialCredit',
        'minimumMemorySize'                  => 'MinimumMemorySize',
        'physicalProcessorModels'            => 'PhysicalProcessorModels',
        'regionId'                           => 'RegionId',
        'spotStrategy'                       => 'SpotStrategy',
        'vSwitchId'                          => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->burstablePerformance) {
            $res['BurstablePerformance'] = $this->burstablePerformance;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->coresList) {
            $res['CoresList'] = $this->coresList;
        }
        if (null !== $this->cpuArchitectures) {
            $res['CpuArchitectures'] = $this->cpuArchitectures;
        }
        if (null !== $this->excludedInstanceType) {
            $res['ExcludedInstanceType'] = $this->excludedInstanceType;
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
        if (null !== $this->memoryList) {
            $res['MemoryList'] = $this->memoryList;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePatternTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            if (!empty($map['Architecture'])) {
                $model->architecture = $map['Architecture'];
            }
        }
        if (isset($map['BurstablePerformance'])) {
            $model->burstablePerformance = $map['BurstablePerformance'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['CoresList'])) {
            if (!empty($map['CoresList'])) {
                $model->coresList = $map['CoresList'];
            }
        }
        if (isset($map['CpuArchitectures'])) {
            if (!empty($map['CpuArchitectures'])) {
                $model->cpuArchitectures = $map['CpuArchitectures'];
            }
        }
        if (isset($map['ExcludedInstanceType'])) {
            if (!empty($map['ExcludedInstanceType'])) {
                $model->excludedInstanceType = $map['ExcludedInstanceType'];
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
        if (isset($map['MemoryList'])) {
            if (!empty($map['MemoryList'])) {
                $model->memoryList = $map['MemoryList'];
            }
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['VSwitchId'])) {
            if (!empty($map['VSwitchId'])) {
                $model->vSwitchId = $map['VSwitchId'];
            }
        }

        return $model;
    }
}
