<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceTypesResponseBody\instanceTypes;

use AlibabaCloud\Dara\Model;

class instanceType extends Model
{
    /**
     * @var int
     */
    public $cpuCoreCount;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $instanceTypeId;

    /**
     * @var int
     */
    public $memorySize;
    protected $_name = [
        'cpuCoreCount' => 'CpuCoreCount',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'instanceTypeId' => 'InstanceTypeId',
        'memorySize' => 'MemorySize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuCoreCount) {
            $res['CpuCoreCount'] = $this->cpuCoreCount;
        }

        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }

        if (null !== $this->instanceTypeId) {
            $res['InstanceTypeId'] = $this->instanceTypeId;
        }

        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
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
        if (isset($map['CpuCoreCount'])) {
            $model->cpuCoreCount = $map['CpuCoreCount'];
        }

        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }

        if (isset($map['InstanceTypeId'])) {
            $model->instanceTypeId = $map['InstanceTypeId'];
        }

        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }

        return $model;
    }
}
