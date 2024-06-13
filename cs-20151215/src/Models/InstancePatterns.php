<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class InstancePatterns extends Model
{
    /**
     * @var string[]
     */
    public $architectures;

    /**
     * @example Exclude
     *
     * @var string
     */
    public $burstPerformanceOption;

    /**
     * @example 4
     *
     * @var int
     */
    public $core;

    /**
     * @var string[]
     */
    public $excludedInstanceTypes;

    /**
     * @example EnterpriseLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @example 2
     *
     * @var float
     */
    public $maxPrice;

    /**
     * @example 8
     *
     * @var float
     */
    public $memory;
    protected $_name = [
        'architectures'          => 'architectures',
        'burstPerformanceOption' => 'burst_performance_option',
        'core'                   => 'core',
        'excludedInstanceTypes'  => 'excluded_instance_types',
        'instanceFamilyLevel'    => 'instance_family_level',
        'maxPrice'               => 'max_price',
        'memory'                 => 'memory',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->excludedInstanceTypes) {
            $res['excluded_instance_types'] = $this->excludedInstanceTypes;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['instance_family_level'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->maxPrice) {
            $res['max_price'] = $this->maxPrice;
        }
        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
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
        if (isset($map['excluded_instance_types'])) {
            if (!empty($map['excluded_instance_types'])) {
                $model->excludedInstanceTypes = $map['excluded_instance_types'];
            }
        }
        if (isset($map['instance_family_level'])) {
            $model->instanceFamilyLevel = $map['instance_family_level'];
        }
        if (isset($map['max_price'])) {
            $model->maxPrice = $map['max_price'];
        }
        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        return $model;
    }
}
