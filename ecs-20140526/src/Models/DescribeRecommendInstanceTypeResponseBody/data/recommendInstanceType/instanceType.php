<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\recommendInstanceType;

use AlibabaCloud\Tea\Model;

class instanceType extends Model
{
    /**
     * @var string
     */
    public $supportIoOptimized;

    /**
     * @var int
     */
    public $cores;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $generation;
    protected $_name = [
        'supportIoOptimized' => 'SupportIoOptimized',
        'cores'              => 'Cores',
        'memory'             => 'Memory',
        'instanceType'       => 'InstanceType',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'generation'         => 'Generation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportIoOptimized) {
            $res['SupportIoOptimized'] = $this->supportIoOptimized;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->generation) {
            $res['Generation'] = $this->generation;
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
        if (isset($map['SupportIoOptimized'])) {
            $model->supportIoOptimized = $map['SupportIoOptimized'];
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['Generation'])) {
            $model->generation = $map['Generation'];
        }

        return $model;
    }
}
