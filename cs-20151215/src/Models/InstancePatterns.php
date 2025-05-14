<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class InstancePatterns extends Model
{
    /**
     * @var string[]
     */
    public $architectures;

    /**
     * @var string
     */
    public $burstPerformanceOption;

    /**
     * @var int
     */
    public $core;

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
     * @var int
     */
    public $maxCpuCores;

    /**
     * @var float
     */
    public $maxMemorySize;

    /**
     * @var float
     */
    public $maxPrice;

    /**
     * @var int
     */
    public $maximumGpuAmount;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var int
     */
    public $minCpuCores;

    /**
     * @var float
     */
    public $minMemorySize;

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
    protected $_name = [
        'architectures' => 'architectures',
        'burstPerformanceOption' => 'burst_performance_option',
        'core' => 'core',
        'cores' => 'cores',
        'cpuArchitectures' => 'cpu_architectures',
        'excludedInstanceTypes' => 'excluded_instance_types',
        'instanceCategories' => 'instance_categories',
        'instanceFamilyLevel' => 'instance_family_level',
        'instanceTypeFamilies' => 'instance_type_families',
        'maxCpuCores' => 'max_cpu_cores',
        'maxMemorySize' => 'max_memory_size',
        'maxPrice' => 'max_price',
        'maximumGpuAmount' => 'maximum_gpu_amount',
        'memory' => 'memory',
        'minCpuCores' => 'min_cpu_cores',
        'minMemorySize' => 'min_memory_size',
        'minimumEniIpv6AddressQuantity' => 'minimum_eni_ipv6_address_quantity',
        'minimumEniPrivateIpAddressQuantity' => 'minimum_eni_private_ip_address_quantity',
        'minimumEniQuantity' => 'minimum_eni_quantity',
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
        if (\is_array($this->instanceCategories)) {
            Model::validateArray($this->instanceCategories);
        }
        if (\is_array($this->instanceTypeFamilies)) {
            Model::validateArray($this->instanceTypeFamilies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->architectures) {
            if (\is_array($this->architectures)) {
                $res['architectures'] = [];
                $n1 = 0;
                foreach ($this->architectures as $item1) {
                    $res['architectures'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->burstPerformanceOption) {
            $res['burst_performance_option'] = $this->burstPerformanceOption;
        }

        if (null !== $this->core) {
            $res['core'] = $this->core;
        }

        if (null !== $this->cores) {
            $res['cores'] = $this->cores;
        }

        if (null !== $this->cpuArchitectures) {
            if (\is_array($this->cpuArchitectures)) {
                $res['cpu_architectures'] = [];
                $n1 = 0;
                foreach ($this->cpuArchitectures as $item1) {
                    $res['cpu_architectures'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->excludedInstanceTypes) {
            if (\is_array($this->excludedInstanceTypes)) {
                $res['excluded_instance_types'] = [];
                $n1 = 0;
                foreach ($this->excludedInstanceTypes as $item1) {
                    $res['excluded_instance_types'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceCategories) {
            if (\is_array($this->instanceCategories)) {
                $res['instance_categories'] = [];
                $n1 = 0;
                foreach ($this->instanceCategories as $item1) {
                    $res['instance_categories'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceFamilyLevel) {
            $res['instance_family_level'] = $this->instanceFamilyLevel;
        }

        if (null !== $this->instanceTypeFamilies) {
            if (\is_array($this->instanceTypeFamilies)) {
                $res['instance_type_families'] = [];
                $n1 = 0;
                foreach ($this->instanceTypeFamilies as $item1) {
                    $res['instance_type_families'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->maxCpuCores) {
            $res['max_cpu_cores'] = $this->maxCpuCores;
        }

        if (null !== $this->maxMemorySize) {
            $res['max_memory_size'] = $this->maxMemorySize;
        }

        if (null !== $this->maxPrice) {
            $res['max_price'] = $this->maxPrice;
        }

        if (null !== $this->maximumGpuAmount) {
            $res['maximum_gpu_amount'] = $this->maximumGpuAmount;
        }

        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->minCpuCores) {
            $res['min_cpu_cores'] = $this->minCpuCores;
        }

        if (null !== $this->minMemorySize) {
            $res['min_memory_size'] = $this->minMemorySize;
        }

        if (null !== $this->minimumEniIpv6AddressQuantity) {
            $res['minimum_eni_ipv6_address_quantity'] = $this->minimumEniIpv6AddressQuantity;
        }

        if (null !== $this->minimumEniPrivateIpAddressQuantity) {
            $res['minimum_eni_private_ip_address_quantity'] = $this->minimumEniPrivateIpAddressQuantity;
        }

        if (null !== $this->minimumEniQuantity) {
            $res['minimum_eni_quantity'] = $this->minimumEniQuantity;
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
        if (isset($map['architectures'])) {
            if (!empty($map['architectures'])) {
                $model->architectures = [];
                $n1 = 0;
                foreach ($map['architectures'] as $item1) {
                    $model->architectures[$n1++] = $item1;
                }
            }
        }

        if (isset($map['burst_performance_option'])) {
            $model->burstPerformanceOption = $map['burst_performance_option'];
        }

        if (isset($map['core'])) {
            $model->core = $map['core'];
        }

        if (isset($map['cores'])) {
            $model->cores = $map['cores'];
        }

        if (isset($map['cpu_architectures'])) {
            if (!empty($map['cpu_architectures'])) {
                $model->cpuArchitectures = [];
                $n1 = 0;
                foreach ($map['cpu_architectures'] as $item1) {
                    $model->cpuArchitectures[$n1++] = $item1;
                }
            }
        }

        if (isset($map['excluded_instance_types'])) {
            if (!empty($map['excluded_instance_types'])) {
                $model->excludedInstanceTypes = [];
                $n1 = 0;
                foreach ($map['excluded_instance_types'] as $item1) {
                    $model->excludedInstanceTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['instance_categories'])) {
            if (!empty($map['instance_categories'])) {
                $model->instanceCategories = [];
                $n1 = 0;
                foreach ($map['instance_categories'] as $item1) {
                    $model->instanceCategories[$n1++] = $item1;
                }
            }
        }

        if (isset($map['instance_family_level'])) {
            $model->instanceFamilyLevel = $map['instance_family_level'];
        }

        if (isset($map['instance_type_families'])) {
            if (!empty($map['instance_type_families'])) {
                $model->instanceTypeFamilies = [];
                $n1 = 0;
                foreach ($map['instance_type_families'] as $item1) {
                    $model->instanceTypeFamilies[$n1++] = $item1;
                }
            }
        }

        if (isset($map['max_cpu_cores'])) {
            $model->maxCpuCores = $map['max_cpu_cores'];
        }

        if (isset($map['max_memory_size'])) {
            $model->maxMemorySize = $map['max_memory_size'];
        }

        if (isset($map['max_price'])) {
            $model->maxPrice = $map['max_price'];
        }

        if (isset($map['maximum_gpu_amount'])) {
            $model->maximumGpuAmount = $map['maximum_gpu_amount'];
        }

        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['min_cpu_cores'])) {
            $model->minCpuCores = $map['min_cpu_cores'];
        }

        if (isset($map['min_memory_size'])) {
            $model->minMemorySize = $map['min_memory_size'];
        }

        if (isset($map['minimum_eni_ipv6_address_quantity'])) {
            $model->minimumEniIpv6AddressQuantity = $map['minimum_eni_ipv6_address_quantity'];
        }

        if (isset($map['minimum_eni_private_ip_address_quantity'])) {
            $model->minimumEniPrivateIpAddressQuantity = $map['minimum_eni_private_ip_address_quantity'];
        }

        if (isset($map['minimum_eni_quantity'])) {
            $model->minimumEniQuantity = $map['minimum_eni_quantity'];
        }

        return $model;
    }
}
