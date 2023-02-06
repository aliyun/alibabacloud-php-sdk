<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSupportInstanceTypesResponseBody\instanceTypes;

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
    public $cpuCoreCount;

    /**
     * @description The instance family.
     *
     * @example ecs.t1
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description The ID of the instance type.
     *
     * @example ecs.t1.xsmall
     *
     * @var string
     */
    public $instanceTypeId;

    /**
     * @description The memory size of the instance type. Unit: GiB.
     *
     * @example 1024
     *
     * @var float
     */
    public $memorySize;
    protected $_name = [
        'cpuCoreCount'       => 'CpuCoreCount',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'instanceTypeId'     => 'InstanceTypeId',
        'memorySize'         => 'MemorySize',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return instanceType
     */
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
