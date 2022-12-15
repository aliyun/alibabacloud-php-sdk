<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\DescribeInstanceTypesResponseBody;

use AlibabaCloud\Tea\Model;

class instanceTypes extends Model
{
    /**
     * @example 0.25
     *
     * @var float
     */
    public $cpuCoreCount;

    /**
     * @example dbfs.small
     *
     * @var string
     */
    public $instanceTypeDescription;

    /**
     * @example dbfs.small
     *
     * @var string
     */
    public $instanceTypeId;

    /**
     * @example 0.5
     *
     * @var float
     */
    public $memorySize;
    protected $_name = [
        'cpuCoreCount'            => 'CpuCoreCount',
        'instanceTypeDescription' => 'InstanceTypeDescription',
        'instanceTypeId'          => 'InstanceTypeId',
        'memorySize'              => 'MemorySize',
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
        if (null !== $this->instanceTypeDescription) {
            $res['InstanceTypeDescription'] = $this->instanceTypeDescription;
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
     * @return instanceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuCoreCount'])) {
            $model->cpuCoreCount = $map['CpuCoreCount'];
        }
        if (isset($map['InstanceTypeDescription'])) {
            $model->instanceTypeDescription = $map['InstanceTypeDescription'];
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
