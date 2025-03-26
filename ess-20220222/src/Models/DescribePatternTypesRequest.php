<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class DescribePatternTypesRequest extends Model
{
    /**
     * @var string[]
     */
    public $architecture;

    /**
     * @var string
     */
    public $burstablePerformance;

    /**
     * @var int
     */
    public $channelId;

    /**
     * @var int
     */
    public $cores;

    /**
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
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @var string[]
     */
    public $instanceTypeFamilies;

    /**
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
     * @var float
     */
    public $memory;

    /**
     * @var float[]
     */
    public $memoryList;

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

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string[]
     */
    public $vSwitchId;

    /**
     * @var string[]
     */
    public $zoneId;
    protected $_name = [
        'architecture' => 'Architecture',
        'burstablePerformance' => 'BurstablePerformance',
        'channelId' => 'ChannelId',
        'cores' => 'Cores',
        'coresList' => 'CoresList',
        'cpuArchitectures' => 'CpuArchitectures',
        'excludedInstanceType' => 'ExcludedInstanceType',
        'gpuSpecs' => 'GpuSpecs',
        'instanceCategories' => 'InstanceCategories',
        'instanceFamilyLevel' => 'InstanceFamilyLevel',
        'instanceTypeFamilies' => 'InstanceTypeFamilies',
        'maxPrice' => 'MaxPrice',
        'maximumCpuCoreCount' => 'MaximumCpuCoreCount',
        'maximumGpuAmount' => 'MaximumGpuAmount',
        'maximumMemorySize' => 'MaximumMemorySize',
        'memory' => 'Memory',
        'memoryList' => 'MemoryList',
        'minimumBaselineCredit' => 'MinimumBaselineCredit',
        'minimumCpuCoreCount' => 'MinimumCpuCoreCount',
        'minimumEniIpv6AddressQuantity' => 'MinimumEniIpv6AddressQuantity',
        'minimumEniPrivateIpAddressQuantity' => 'MinimumEniPrivateIpAddressQuantity',
        'minimumEniQuantity' => 'MinimumEniQuantity',
        'minimumGpuAmount' => 'MinimumGpuAmount',
        'minimumInitialCredit' => 'MinimumInitialCredit',
        'minimumMemorySize' => 'MinimumMemorySize',
        'physicalProcessorModels' => 'PhysicalProcessorModels',
        'regionId' => 'RegionId',
        'spotStrategy' => 'SpotStrategy',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->architecture)) {
            Model::validateArray($this->architecture);
        }
        if (\is_array($this->coresList)) {
            Model::validateArray($this->coresList);
        }
        if (\is_array($this->cpuArchitectures)) {
            Model::validateArray($this->cpuArchitectures);
        }
        if (\is_array($this->excludedInstanceType)) {
            Model::validateArray($this->excludedInstanceType);
        }
        if (\is_array($this->gpuSpecs)) {
            Model::validateArray($this->gpuSpecs);
        }
        if (\is_array($this->instanceCategories)) {
            Model::validateArray($this->instanceCategories);
        }
        if (\is_array($this->instanceTypeFamilies)) {
            Model::validateArray($this->instanceTypeFamilies);
        }
        if (\is_array($this->memoryList)) {
            Model::validateArray($this->memoryList);
        }
        if (\is_array($this->physicalProcessorModels)) {
            Model::validateArray($this->physicalProcessorModels);
        }
        if (\is_array($this->vSwitchId)) {
            Model::validateArray($this->vSwitchId);
        }
        if (\is_array($this->zoneId)) {
            Model::validateArray($this->zoneId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->architecture) {
            if (\is_array($this->architecture)) {
                $res['Architecture'] = [];
                $n1 = 0;
                foreach ($this->architecture as $item1) {
                    $res['Architecture'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->coresList)) {
                $res['CoresList'] = [];
                $n1 = 0;
                foreach ($this->coresList as $item1) {
                    $res['CoresList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->cpuArchitectures) {
            if (\is_array($this->cpuArchitectures)) {
                $res['CpuArchitectures'] = [];
                $n1 = 0;
                foreach ($this->cpuArchitectures as $item1) {
                    $res['CpuArchitectures'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->excludedInstanceType) {
            if (\is_array($this->excludedInstanceType)) {
                $res['ExcludedInstanceType'] = [];
                $n1 = 0;
                foreach ($this->excludedInstanceType as $item1) {
                    $res['ExcludedInstanceType'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->gpuSpecs) {
            if (\is_array($this->gpuSpecs)) {
                $res['GpuSpecs'] = [];
                $n1 = 0;
                foreach ($this->gpuSpecs as $item1) {
                    $res['GpuSpecs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceCategories) {
            if (\is_array($this->instanceCategories)) {
                $res['InstanceCategories'] = [];
                $n1 = 0;
                foreach ($this->instanceCategories as $item1) {
                    $res['InstanceCategories'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }

        if (null !== $this->instanceTypeFamilies) {
            if (\is_array($this->instanceTypeFamilies)) {
                $res['InstanceTypeFamilies'] = [];
                $n1 = 0;
                foreach ($this->instanceTypeFamilies as $item1) {
                    $res['InstanceTypeFamilies'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->memoryList)) {
                $res['MemoryList'] = [];
                $n1 = 0;
                foreach ($this->memoryList as $item1) {
                    $res['MemoryList'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->physicalProcessorModels)) {
                $res['PhysicalProcessorModels'] = [];
                $n1 = 0;
                foreach ($this->physicalProcessorModels as $item1) {
                    $res['PhysicalProcessorModels'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        if (null !== $this->vSwitchId) {
            if (\is_array($this->vSwitchId)) {
                $res['VSwitchId'] = [];
                $n1 = 0;
                foreach ($this->vSwitchId as $item1) {
                    $res['VSwitchId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->zoneId) {
            if (\is_array($this->zoneId)) {
                $res['ZoneId'] = [];
                $n1 = 0;
                foreach ($this->zoneId as $item1) {
                    $res['ZoneId'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            if (!empty($map['Architecture'])) {
                $model->architecture = [];
                $n1 = 0;
                foreach ($map['Architecture'] as $item1) {
                    $model->architecture[$n1++] = $item1;
                }
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
                $model->coresList = [];
                $n1 = 0;
                foreach ($map['CoresList'] as $item1) {
                    $model->coresList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CpuArchitectures'])) {
            if (!empty($map['CpuArchitectures'])) {
                $model->cpuArchitectures = [];
                $n1 = 0;
                foreach ($map['CpuArchitectures'] as $item1) {
                    $model->cpuArchitectures[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ExcludedInstanceType'])) {
            if (!empty($map['ExcludedInstanceType'])) {
                $model->excludedInstanceType = [];
                $n1 = 0;
                foreach ($map['ExcludedInstanceType'] as $item1) {
                    $model->excludedInstanceType[$n1++] = $item1;
                }
            }
        }

        if (isset($map['GpuSpecs'])) {
            if (!empty($map['GpuSpecs'])) {
                $model->gpuSpecs = [];
                $n1 = 0;
                foreach ($map['GpuSpecs'] as $item1) {
                    $model->gpuSpecs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceCategories'])) {
            if (!empty($map['InstanceCategories'])) {
                $model->instanceCategories = [];
                $n1 = 0;
                foreach ($map['InstanceCategories'] as $item1) {
                    $model->instanceCategories[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }

        if (isset($map['InstanceTypeFamilies'])) {
            if (!empty($map['InstanceTypeFamilies'])) {
                $model->instanceTypeFamilies = [];
                $n1 = 0;
                foreach ($map['InstanceTypeFamilies'] as $item1) {
                    $model->instanceTypeFamilies[$n1++] = $item1;
                }
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
                $model->memoryList = [];
                $n1 = 0;
                foreach ($map['MemoryList'] as $item1) {
                    $model->memoryList[$n1++] = $item1;
                }
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
                $model->physicalProcessorModels = [];
                $n1 = 0;
                foreach ($map['PhysicalProcessorModels'] as $item1) {
                    $model->physicalProcessorModels[$n1++] = $item1;
                }
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
                $model->vSwitchId = [];
                $n1 = 0;
                foreach ($map['VSwitchId'] as $item1) {
                    $model->vSwitchId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ZoneId'])) {
            if (!empty($map['ZoneId'])) {
                $model->zoneId = [];
                $n1 = 0;
                foreach ($map['ZoneId'] as $item1) {
                    $model->zoneId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
