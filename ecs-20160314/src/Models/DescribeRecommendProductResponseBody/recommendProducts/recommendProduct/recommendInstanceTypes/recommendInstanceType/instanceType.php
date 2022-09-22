<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeRecommendProductResponseBody\recommendProducts\recommendProduct\recommendInstanceTypes\recommendInstanceType;

use AlibabaCloud\Tea\Model;

class instanceType extends Model
{
    /**
     * @var int
     */
    public $cores;

    /**
     * @var string
     */
    public $generation;

    /**
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $supportIoOptimized;
    protected $_name = [
        'cores'               => 'Cores',
        'generation'          => 'Generation',
        'instanceFamilyLevel' => 'InstanceFamilyLevel',
        'instanceType'        => 'InstanceType',
        'instanceTypeFamily'  => 'InstanceTypeFamily',
        'memory'              => 'Memory',
        'supportIoOptimized'  => 'SupportIoOptimized',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->generation) {
            $res['Generation'] = $this->generation;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->supportIoOptimized) {
            $res['SupportIoOptimized'] = $this->supportIoOptimized;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['Generation'])) {
            $model->generation = $map['Generation'];
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['SupportIoOptimized'])) {
            $model->supportIoOptimized = $map['SupportIoOptimized'];
        }

        return $model;
    }
}
