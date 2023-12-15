<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeInstanceTypeResponseBody\instanceTypeSpecList;

use AlibabaCloud\Tea\Model;

class instanceTypeSpec extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $cpuSize;

    /**
     * @example cassandra.c.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 8
     *
     * @var int
     */
    public $memSize;
    protected $_name = [
        'cpuSize'      => 'CpuSize',
        'instanceType' => 'InstanceType',
        'memSize'      => 'MemSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuSize) {
            $res['CpuSize'] = $this->cpuSize;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->memSize) {
            $res['MemSize'] = $this->memSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuSize'])) {
            $model->cpuSize = $map['CpuSize'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MemSize'])) {
            $model->memSize = $map['MemSize'];
        }

        return $model;
    }
}
