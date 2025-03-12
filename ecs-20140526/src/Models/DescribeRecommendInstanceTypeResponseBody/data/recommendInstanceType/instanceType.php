<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\recommendInstanceType;

use AlibabaCloud\Tea\Model;

class instanceType extends Model
{
    /**
     * @description The number of vCPUs of the instance type.
     *
     * @example 1
     *
     * @var int
     */
    public $cores;

    /**
     * @description The generation of the instance family.
     *
     * @example ecs-4
     *
     * @var string
     */
    public $generation;

    /**
     * @description The name of the instance type.
     *
     * @example ecs.hfg6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The instance family.
     *
     * @example ecs.hfg6
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description The memory size of the instance type. Unit: MB.
     *
     * @example 8192
     *
     * @var int
     */
    public $memory;

    /**
     * @description Indicates whether the instance type supports I/O optimization.
     *
     * @example optimized
     *
     * @var string
     */
    public $supportIoOptimized;
    protected $_name = [
        'cores'              => 'Cores',
        'generation'         => 'Generation',
        'instanceType'       => 'InstanceType',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'memory'             => 'Memory',
        'supportIoOptimized' => 'SupportIoOptimized',
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
