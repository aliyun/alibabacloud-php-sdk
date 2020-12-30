<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstanceTypeResponseBody\instanceTypeSpecList;

use AlibabaCloud\Tea\Model;

class instanceTypeSpec extends Model
{
    /**
     * @var int
     */
    public $cpuSize;

    /**
     * @var int
     */
    public $memSize;

    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'cpuSize'      => 'CpuSize',
        'memSize'      => 'MemSize',
        'instanceType' => 'InstanceType',
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
        if (null !== $this->memSize) {
            $res['MemSize'] = $this->memSize;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (isset($map['MemSize'])) {
            $model->memSize = $map['MemSize'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
