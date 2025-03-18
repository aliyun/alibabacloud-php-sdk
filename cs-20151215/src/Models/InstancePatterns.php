<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class InstancePatterns extends Model
{
    /**
     * @deprecated
     *
     * @var string[]
     */
    public $architectures;

    /**
     * @example Exclude
     *
     * @deprecated
     *
     * @var string
     */
    public $burstPerformanceOption;

    /**
     * @example 4
     *
     * @deprecated
     *
     * @var int
     */
    public $core;

    /**
     * @example 4
     *
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
     * @example 8
     *
     * @var int
     */
    public $maxCpuCores;

    /**
     * @example 16
     *
     * @var float
     */
    public $maxMemorySize;

    /**
     * @example 2
     *
     * @deprecated
     *
     * @var float
     */
    public $maxPrice;

    /**
     * @var int
     */
    public $maximumGpuAmount;

    /**
     * @example 8
     *
     * @var float
     */
    public $memory;

    /**
     * @example 4
     *
     * @var int
     */
    public $minCpuCores;

    /**
     * @example 8
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->architectures) {
            $res['architectures'] = $this->architectures;
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
            $res['cpu_architectures'] = $this->cpuArchitectures;
        }
        if (null !== $this->excludedInstanceTypes) {
            $res['excluded_instance_types'] = $this->excludedInstanceTypes;
        }
        if (null !== $this->instanceCategories) {
            $res['instance_categories'] = $this->instanceCategories;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['instance_family_level'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->instanceTypeFamilies) {
            $res['instance_type_families'] = $this->instanceTypeFamilies;
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

    /**
     * @param array $map
     *
     * @return InstancePatterns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['architectures'])) {
            if (!empty($map['architectures'])) {
                $model->architectures = $map['architectures'];
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
                $model->cpuArchitectures = $map['cpu_architectures'];
            }
        }
        if (isset($map['excluded_instance_types'])) {
            if (!empty($map['excluded_instance_types'])) {
                $model->excludedInstanceTypes = $map['excluded_instance_types'];
            }
        }
        if (isset($map['instance_categories'])) {
            if (!empty($map['instance_categories'])) {
                $model->instanceCategories = $map['instance_categories'];
            }
        }
        if (isset($map['instance_family_level'])) {
            $model->instanceFamilyLevel = $map['instance_family_level'];
        }
        if (isset($map['instance_type_families'])) {
            if (!empty($map['instance_type_families'])) {
                $model->instanceTypeFamilies = $map['instance_type_families'];
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
