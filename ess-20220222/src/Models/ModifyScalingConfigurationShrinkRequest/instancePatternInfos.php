<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationShrinkRequest;

use AlibabaCloud\Dara\Model;

class instancePatternInfos extends Model
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
     * @var int
     */
    public $cores;
    /**
     * @var string[]
     */
    public $cpuArchitectures;
    /**
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
        if (\is_array($this->architectures)) {
            Model::validateArray($this->architectures);
        }
        if (\is_array($this->cpuArchitectures)) {
            Model::validateArray($this->cpuArchitectures);
        }
        if (\is_array($this->excludedInstanceTypes)) {
            Model::validateArray($this->excludedInstanceTypes);
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
        if (\is_array($this->physicalProcessorModels)) {
            Model::validateArray($this->physicalProcessorModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->architectures) {
            if (\is_array($this->architectures)) {
                $res['Architectures'] = [];
                $n1                   = 0;
                foreach ($this->architectures as $item1) {
                    $res['Architectures'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->burstablePerformance) {
            $res['BurstablePerformance'] = $this->burstablePerformance;
        }

        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }

        if (null !== $this->cpuArchitectures) {
            if (\is_array($this->cpuArchitectures)) {
                $res['CpuArchitectures'] = [];
                $n1                      = 0;
                foreach ($this->cpuArchitectures as $item1) {
                    $res['CpuArchitectures'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->excludedInstanceTypes) {
            if (\is_array($this->excludedInstanceTypes)) {
                $res['ExcludedInstanceTypes'] = [];
                $n1                           = 0;
                foreach ($this->excludedInstanceTypes as $item1) {
                    $res['ExcludedInstanceTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->gpuSpecs) {
            if (\is_array($this->gpuSpecs)) {
                $res['GpuSpecs'] = [];
                $n1              = 0;
                foreach ($this->gpuSpecs as $item1) {
                    $res['GpuSpecs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceCategories) {
            if (\is_array($this->instanceCategories)) {
                $res['InstanceCategories'] = [];
                $n1                        = 0;
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
                $n1                          = 0;
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
                $n1                             = 0;
                foreach ($this->physicalProcessorModels as $item1) {
                    $res['PhysicalProcessorModels'][$n1++] = $item1;
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
        if (isset($map['Architectures'])) {
            if (!empty($map['Architectures'])) {
                $model->architectures = [];
                $n1                   = 0;
                foreach ($map['Architectures'] as $item1) {
                    $model->architectures[$n1++] = $item1;
                }
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
                $model->cpuArchitectures = [];
                $n1                      = 0;
                foreach ($map['CpuArchitectures'] as $item1) {
                    $model->cpuArchitectures[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ExcludedInstanceTypes'])) {
            if (!empty($map['ExcludedInstanceTypes'])) {
                $model->excludedInstanceTypes = [];
                $n1                           = 0;
                foreach ($map['ExcludedInstanceTypes'] as $item1) {
                    $model->excludedInstanceTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['GpuSpecs'])) {
            if (!empty($map['GpuSpecs'])) {
                $model->gpuSpecs = [];
                $n1              = 0;
                foreach ($map['GpuSpecs'] as $item1) {
                    $model->gpuSpecs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceCategories'])) {
            if (!empty($map['InstanceCategories'])) {
                $model->instanceCategories = [];
                $n1                        = 0;
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
                $n1                          = 0;
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
                $n1                             = 0;
                foreach ($map['PhysicalProcessorModels'] as $item1) {
                    $model->physicalProcessorModels[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
