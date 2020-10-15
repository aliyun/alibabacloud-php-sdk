<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceTypesResponse\instanceTypes;

use AlibabaCloud\Tea\Model;

class instanceType extends Model
{
    /**
     * @var int
     */
    public $cpuCoreCount;

    /**
     * @var int
     */
    public $memorySize;

    /**
     * @var string
     */
    public $instanceTypeId;

    /**
     * @var string
     */
    public $instanceTypeName;
    protected $_name = [
        'cpuCoreCount'     => 'CpuCoreCount',
        'memorySize'       => 'MemorySize',
        'instanceTypeId'   => 'InstanceTypeId',
        'instanceTypeName' => 'InstanceTypeName',
    ];

    public function validate()
    {
        Model::validateRequired('cpuCoreCount', $this->cpuCoreCount, true);
        Model::validateRequired('memorySize', $this->memorySize, true);
        Model::validateRequired('instanceTypeId', $this->instanceTypeId, true);
        Model::validateRequired('instanceTypeName', $this->instanceTypeName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuCoreCount) {
            $res['CpuCoreCount'] = $this->cpuCoreCount;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->instanceTypeId) {
            $res['InstanceTypeId'] = $this->instanceTypeId;
        }
        if (null !== $this->instanceTypeName) {
            $res['InstanceTypeName'] = $this->instanceTypeName;
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
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['InstanceTypeId'])) {
            $model->instanceTypeId = $map['InstanceTypeId'];
        }
        if (isset($map['InstanceTypeName'])) {
            $model->instanceTypeName = $map['InstanceTypeName'];
        }

        return $model;
    }
}
