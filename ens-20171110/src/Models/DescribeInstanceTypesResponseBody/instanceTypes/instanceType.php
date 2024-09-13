<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceTypesResponseBody\instanceTypes;

use AlibabaCloud\Tea\Model;

class instanceType extends Model
{
    /**
     * @description The number of vCPUs.
     *
     * @example 2
     *
     * @var int
     */
    public $cpuCoreCount;

    /**
     * @description This parameter is unavailable.
     *
     * @example This parameter is not needed temporarily.
     *
     * @var string
     */
    public $instanceTypeId;

    /**
     * @description The name of the instance type.
     *
     * @example ens.xxx.small
     *
     * @var string
     */
    public $instanceTypeName;

    /**
     * @description The memory size. Unit: MB.
     *
     * @example 8192
     *
     * @var int
     */
    public $memorySize;
    protected $_name = [
        'cpuCoreCount'     => 'CpuCoreCount',
        'instanceTypeId'   => 'InstanceTypeId',
        'instanceTypeName' => 'InstanceTypeName',
        'memorySize'       => 'MemorySize',
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
        if (null !== $this->instanceTypeId) {
            $res['InstanceTypeId'] = $this->instanceTypeId;
        }
        if (null !== $this->instanceTypeName) {
            $res['InstanceTypeName'] = $this->instanceTypeName;
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
        if (isset($map['InstanceTypeId'])) {
            $model->instanceTypeId = $map['InstanceTypeId'];
        }
        if (isset($map['InstanceTypeName'])) {
            $model->instanceTypeName = $map['InstanceTypeName'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }

        return $model;
    }
}
